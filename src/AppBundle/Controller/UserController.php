<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller {

	public function meAction(Request $request) {
		return $this->render('AppBundle:User:me.html.twig');
	}
}
