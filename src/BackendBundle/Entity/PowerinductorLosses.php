<?php

namespace BackendBundle\Entity;

/**
 * PowerinductorLosses
 */
class PowerinductorLosses
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $voltageInductor;

    /**
     * @var \BackendBundle\Entity\Powerinductor
     */
    private $powerInductor;

    /**
     * @var \BackendBundle\Entity\Losses
     */
    private $losses;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set voltageInductor
     *
     * @param float $voltageInductor
     *
     * @return PowerinductorLosses
     */
    public function setVoltageInductor($voltageInductor)
    {
        $this->voltageInductor = $voltageInductor;

        return $this;
    }

    /**
     * Get voltageInductor
     *
     * @return float
     */
    public function getVoltageInductor()
    {
        return $this->voltageInductor;
    }

    /**
     * Set powerInductor
     *
     * @param \BackendBundle\Entity\Powerinductor $powerInductor
     *
     * @return PowerinductorLosses
     */
    public function setPowerInductor(\BackendBundle\Entity\Powerinductor $powerInductor = null)
    {
        $this->powerInductor = $powerInductor;

        return $this;
    }

    /**
     * Get powerInductor
     *
     * @return \BackendBundle\Entity\Powerinductor
     */
    public function getPowerInductor()
    {
        return $this->powerInductor;
    }

    /**
     * Set losses
     *
     * @param \BackendBundle\Entity\Losses $losses
     *
     * @return PowerinductorLosses
     */
    public function setLosses(\BackendBundle\Entity\Losses $losses = null)
    {
        $this->losses = $losses;

        return $this;
    }

    /**
     * Get losses
     *
     * @return \BackendBundle\Entity\Losses
     */
    public function getLosses()
    {
        return $this->losses;
    }
}

