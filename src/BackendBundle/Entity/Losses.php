<?php

namespace BackendBundle\Entity;

/**
 * Losses
 */
class Losses
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $losses;

    /**
     * @var \DateTime
     */
    private $calculatedAt;


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
     * Set losses
     *
     * @param float $losses
     *
     * @return Losses
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;

        return $this;
    }

    /**
     * Get losses
     *
     * @return float
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * Set calculatedAt
     *
     * @param \DateTime $calculatedAt
     *
     * @return Losses
     */
    public function setCalculatedAt($calculatedAt)
    {
        $this->calculatedAt = $calculatedAt;

        return $this;
    }

    /**
     * Get calculatedAt
     *
     * @return \DateTime
     */
    public function getCalculatedAt()
    {
        return $this->calculatedAt;
    }
}

