<?php

namespace AppBundle\Controller;

use BackendBundle\Entity\Losses;
use BackendBundle\Entity\Powerinductor;
use BackendBundle\Entity\PowerinductorLosses;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LossesController extends Controller {

	public function indexCalculationAction(Request $request) {
		$status = "";
		$message = "";
		$em = $this->getDoctrine()->getManager();
		$powerInductors = $em->getRepository("BackendBundle:Powerinductor")->findAll();
		return $this->render('AppBundle:Losses:calculatePulses.html.twig', array(
			'powerInductors' => $powerInductors,
			'status' => $status,
			'message' => $message,
		));
	}
	public function calculationAction(Request $request) {

		$status = "";
		$message = "";
		$em = $this->getDoctrine()->getManager();
		$powerInductors_repo = $em->getRepository("BackendBundle:Powerinductor");
		$powerInductors = $powerInductors_repo->findAll();

		if ($request->get('form-fc') == null or $request->get('form-fr') == null) {
			$status = 'Error';
			$message = 'Fallo al rellenar el formulario, debes completar todos los campos';
			return $this->render('AppBundle:Losses:calculatePulses.html.twig', array(
				'powerInductors' => $powerInductors,
				'status' => $status,
				'message' => $message,
			));
		}
		$data['fc'] = $request->get('form-fc');
		$data['fr'] = $request->get('form-fr');

		$Inductor = new Powerinductor();
		$Inductor = $powerInductors_repo->findOneBy(array("id" => $request->get('idPI')));

		// Parameters declaration for Formula
		$rk = $Inductor->getRk();
		$rv = $Inductor->getRv();
		$rt = $Inductor->getRt();
		$rr = $Inductor->getRr();
		$rs = $Inductor->getRs();
		$vind = $request->get('form-vind');
		$rdcTyp = $Inductor->getResistanceDcTyp();
		$dc = 0.5; // Allways 0.5
		$isat = $Inductor->getSaturationCurrent();
		//

		$Losses = new Losses();
		$Pi_Losses = new PowerinductorLosses();

		$data['numPulses'] = ($data['fr'] * 0.5) - 1;
		$sumLosses = 0;

		switch ($request->get('form-wavestype')) {
		case '1':
			$data['wave'] = 'Triangular';
			for ($pulse = 0; $pulse < $data['numPulses']; $pulse++) {
				$data['pulseWidth'][$pulse] = (sin((pi() * ($pulse + 1)) / (0.5 * $data['fr'])) * (0.903215 * pow($data['fr'], -1.0007)));
				$numerador = ($rk * pow($vind, $rv)) * pow($data['pulseWidth'][$pulse], $rt) * pow($rdcTyp, $rr) * $dc;
				$denominador = 1000 * pow($isat, $rs);
				$data['pulseLoss'][$pulse] = $numerador / $denominador;
				$sumLosses += $data['pulseLoss'][$pulse];
			}
			break;

		case '2':
			$data['wave'] = 'Triangular Pulsatoria';
			for ($pulse = 0; $pulse < $data['numPulses']; $pulse++) {
				$data['pulseWidth'][$pulse] = (sin((pi() * ($pulse + 1)) / (0.5 * $data['fr'])) * (0.2664442 * pow($data['fr'], -0.9035077)) + (0.6721227 * pow($data['fr'], -1.056618)));
				$numerador = ($rk * pow($vind, $rv)) * pow($data['pulseWidth'][$pulse], $rt) * pow($rdcTyp, $rr) * $dc;
				$denominador = 1000 * pow($isat, $rs);
				$data['pulseLoss'][$pulse] = $numerador / $denominador;
				$sumLosses += $data['pulseLoss'][$pulse];
			}
			break;
		}

		$Losses->setLosses($sumLosses);
		$now = new \DateTime();
		$Losses->setCalculatedAt($now);
		$em->persist($Losses);
		$flush = $em->flush();
		if ($flush == null) {
			$Pi_Losses->setLosses($Losses);
			$Pi_Losses->setVoltageInductor($vind);
			$Pi_Losses->setPowerInductor($Inductor);
			$em->persist($Pi_Losses);
			$flush_pi = $em->flush();
			if ($flush_pi == null) {
				// All is ok
			} else {
				$status = 'Error';
				$message = 'Fallo en el cálculo de las pérdidas, contacte con el proyectista en caso de que el error siga sucediéndose.';
				return $this->render('AppBundle:Losses:calculatePulses.html.twig', array(
					'powerInductors' => $powerInductors,
					'status' => $status,
					'message' => $message,
				));
			}
		} else {
			$status = 'Error';
			$message = 'Fallo en el cálculo de las pérdidas, contacte con el proyectista en caso de que el error siga sucediéndose.';
			return $this->render('AppBundle:Losses:calculatePulses.html.twig', array(
				'powerInductors' => $powerInductors,
				'status' => $status,
				'message' => $message,
			));
		} // Flushes of both entities

		return $this->render('AppBundle:Losses:calculated_losses.html.twig', array(
			'powerInductors' => $powerInductors,
			'status' => $status,
			'message' => $message,
			'inductor' => $Inductor,
			'data' => $data,
		));
	}

	public function viewAction(Request $request) {

		$em = $this->getDoctrine()->getManager();
		$powerInductors = $em->getRepository("BackendBundle:Powerinductor")->findAll();

		return $this->render('AppBundle:Losses:view_losses.html.twig', array(
			'powerInductors' => $powerInductors,
		));
	}

	public function getLossesAction(Request $request) {
		$em = $this->getDoctrine()->getManager();
		$powerInductors_repo = $em->getRepository("BackendBundle:Powerinductor");
		$powerInductors = $powerInductors_repo->findAll();
		$losses_repo = $em->getRepository("BackendBundle:Losses");
		$pi_losses_repo = $em->getRepository("BackendBundle:PowerinductorLosses");

		$pi_selected = $powerInductors_repo->findOneBy(array("id" => $request->get('idPI')));
		$losses = $pi_losses_repo->findBy(array("powerInductor" => $request->get('idPI')));

		// var_dump($pi_selected);
		// die();
		return $this->render('AppBundle:Losses:view_losses.html.twig', array(
			'powerInductors' => $powerInductors,
			'pi_selected' => $pi_selected,
			'losses' => $losses,
		));
		// var_dump($request->get('idPI'));
		// die();
	}
}
