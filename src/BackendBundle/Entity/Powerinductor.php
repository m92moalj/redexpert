<?php

namespace BackendBundle\Entity;

/**
 * Powerinductor
 */
class Powerinductor
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $series;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var string
     */
    private $orderCode;

    /**
     * @var string
     */
    private $isInternal;

    /**
     * @var string
     */
    private $inductance;

    /**
     * @var string
     */
    private $resistanceDcTyp;

    /**
     * @var string
     */
    private $ratedCurrent;

    /**
     * @var integer
     */
    private $ratedCurrentTemperature;

    /**
     * @var string
     */
    private $saturationCurrent;

    /**
     * @var string
     */
    private $sizeLength;

    /**
     * @var string
     */
    private $sizeWidth;

    /**
     * @var string
     */
    private $sizeHeightMax;

    /**
     * @var string
     */
    private $footprint;

    /**
     * @var integer
     */
    private $temperatureOpt;

    /**
     * @var string
     */
    private $isAecq;

    /**
     * @var string
     */
    private $shieldingType;

    /**
     * @var string
     */
    private $coreMaterial;

    /**
     * @var string
     */
    private $voltageSec;

    /**
     * @var string
     */
    private $assemblingTechnology;

    /**
     * @var string
     */
    private $parallelResistance;

    /**
     * @var string
     */
    private $parallelCapacitance;

    /**
     * @var string
     */
    private $selfResonanFrequency;

    /**
     * @var string
     */
    private $rk;

    /**
     * @var string
     */
    private $rv;

    /**
     * @var string
     */
    private $rt;

    /**
     * @var string
     */
    private $rr;

    /**
     * @var string
     */
    private $rs;

    /**
     * @var string
     */
    private $warmingFactor;

    /**
     * @var string
     */
    private $warmingExp;

    /**
     * @var string
     */
    private $icrackPower;

    /**
     * @var string
     */
    private $icrackPoweremi;

    /**
     * @var string
     */
    private $icrackEmi;

    /**
     * @var string
     */
    private $icrackMouser;


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
     * Set type
     *
     * @param string $type
     *
     * @return Powerinductor
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set series
     *
     * @param string $series
     *
     * @return Powerinductor
     */
    public function setSeries($series)
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Get series
     *
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Set size
     *
     * @param integer $size
     *
     * @return Powerinductor
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set orderCode
     *
     * @param string $orderCode
     *
     * @return Powerinductor
     */
    public function setOrderCode($orderCode)
    {
        $this->orderCode = $orderCode;

        return $this;
    }

    /**
     * Get orderCode
     *
     * @return string
     */
    public function getOrderCode()
    {
        return $this->orderCode;
    }

    /**
     * Set isInternal
     *
     * @param string $isInternal
     *
     * @return Powerinductor
     */
    public function setIsInternal($isInternal)
    {
        $this->isInternal = $isInternal;

        return $this;
    }

    /**
     * Get isInternal
     *
     * @return string
     */
    public function getIsInternal()
    {
        return $this->isInternal;
    }

    /**
     * Set inductance
     *
     * @param string $inductance
     *
     * @return Powerinductor
     */
    public function setInductance($inductance)
    {
        $this->inductance = $inductance;

        return $this;
    }

    /**
     * Get inductance
     *
     * @return string
     */
    public function getInductance()
    {
        return $this->inductance;
    }

    /**
     * Set resistanceDcTyp
     *
     * @param string $resistanceDcTyp
     *
     * @return Powerinductor
     */
    public function setResistanceDcTyp($resistanceDcTyp)
    {
        $this->resistanceDcTyp = $resistanceDcTyp;

        return $this;
    }

    /**
     * Get resistanceDcTyp
     *
     * @return string
     */
    public function getResistanceDcTyp()
    {
        return $this->resistanceDcTyp;
    }

    /**
     * Set ratedCurrent
     *
     * @param string $ratedCurrent
     *
     * @return Powerinductor
     */
    public function setRatedCurrent($ratedCurrent)
    {
        $this->ratedCurrent = $ratedCurrent;

        return $this;
    }

    /**
     * Get ratedCurrent
     *
     * @return string
     */
    public function getRatedCurrent()
    {
        return $this->ratedCurrent;
    }

    /**
     * Set ratedCurrentTemperature
     *
     * @param integer $ratedCurrentTemperature
     *
     * @return Powerinductor
     */
    public function setRatedCurrentTemperature($ratedCurrentTemperature)
    {
        $this->ratedCurrentTemperature = $ratedCurrentTemperature;

        return $this;
    }

    /**
     * Get ratedCurrentTemperature
     *
     * @return integer
     */
    public function getRatedCurrentTemperature()
    {
        return $this->ratedCurrentTemperature;
    }

    /**
     * Set saturationCurrent
     *
     * @param string $saturationCurrent
     *
     * @return Powerinductor
     */
    public function setSaturationCurrent($saturationCurrent)
    {
        $this->saturationCurrent = $saturationCurrent;

        return $this;
    }

    /**
     * Get saturationCurrent
     *
     * @return string
     */
    public function getSaturationCurrent()
    {
        return $this->saturationCurrent;
    }

    /**
     * Set sizeLength
     *
     * @param string $sizeLength
     *
     * @return Powerinductor
     */
    public function setSizeLength($sizeLength)
    {
        $this->sizeLength = $sizeLength;

        return $this;
    }

    /**
     * Get sizeLength
     *
     * @return string
     */
    public function getSizeLength()
    {
        return $this->sizeLength;
    }

    /**
     * Set sizeWidth
     *
     * @param string $sizeWidth
     *
     * @return Powerinductor
     */
    public function setSizeWidth($sizeWidth)
    {
        $this->sizeWidth = $sizeWidth;

        return $this;
    }

    /**
     * Get sizeWidth
     *
     * @return string
     */
    public function getSizeWidth()
    {
        return $this->sizeWidth;
    }

    /**
     * Set sizeHeightMax
     *
     * @param string $sizeHeightMax
     *
     * @return Powerinductor
     */
    public function setSizeHeightMax($sizeHeightMax)
    {
        $this->sizeHeightMax = $sizeHeightMax;

        return $this;
    }

    /**
     * Get sizeHeightMax
     *
     * @return string
     */
    public function getSizeHeightMax()
    {
        return $this->sizeHeightMax;
    }

    /**
     * Set footprint
     *
     * @param string $footprint
     *
     * @return Powerinductor
     */
    public function setFootprint($footprint)
    {
        $this->footprint = $footprint;

        return $this;
    }

    /**
     * Get footprint
     *
     * @return string
     */
    public function getFootprint()
    {
        return $this->footprint;
    }

    /**
     * Set temperatureOpt
     *
     * @param integer $temperatureOpt
     *
     * @return Powerinductor
     */
    public function setTemperatureOpt($temperatureOpt)
    {
        $this->temperatureOpt = $temperatureOpt;

        return $this;
    }

    /**
     * Get temperatureOpt
     *
     * @return integer
     */
    public function getTemperatureOpt()
    {
        return $this->temperatureOpt;
    }

    /**
     * Set isAecq
     *
     * @param string $isAecq
     *
     * @return Powerinductor
     */
    public function setIsAecq($isAecq)
    {
        $this->isAecq = $isAecq;

        return $this;
    }

    /**
     * Get isAecq
     *
     * @return string
     */
    public function getIsAecq()
    {
        return $this->isAecq;
    }

    /**
     * Set shieldingType
     *
     * @param string $shieldingType
     *
     * @return Powerinductor
     */
    public function setShieldingType($shieldingType)
    {
        $this->shieldingType = $shieldingType;

        return $this;
    }

    /**
     * Get shieldingType
     *
     * @return string
     */
    public function getShieldingType()
    {
        return $this->shieldingType;
    }

    /**
     * Set coreMaterial
     *
     * @param string $coreMaterial
     *
     * @return Powerinductor
     */
    public function setCoreMaterial($coreMaterial)
    {
        $this->coreMaterial = $coreMaterial;

        return $this;
    }

    /**
     * Get coreMaterial
     *
     * @return string
     */
    public function getCoreMaterial()
    {
        return $this->coreMaterial;
    }

    /**
     * Set voltageSec
     *
     * @param string $voltageSec
     *
     * @return Powerinductor
     */
    public function setVoltageSec($voltageSec)
    {
        $this->voltageSec = $voltageSec;

        return $this;
    }

    /**
     * Get voltageSec
     *
     * @return string
     */
    public function getVoltageSec()
    {
        return $this->voltageSec;
    }

    /**
     * Set assemblingTechnology
     *
     * @param string $assemblingTechnology
     *
     * @return Powerinductor
     */
    public function setAssemblingTechnology($assemblingTechnology)
    {
        $this->assemblingTechnology = $assemblingTechnology;

        return $this;
    }

    /**
     * Get assemblingTechnology
     *
     * @return string
     */
    public function getAssemblingTechnology()
    {
        return $this->assemblingTechnology;
    }

    /**
     * Set parallelResistance
     *
     * @param string $parallelResistance
     *
     * @return Powerinductor
     */
    public function setParallelResistance($parallelResistance)
    {
        $this->parallelResistance = $parallelResistance;

        return $this;
    }

    /**
     * Get parallelResistance
     *
     * @return string
     */
    public function getParallelResistance()
    {
        return $this->parallelResistance;
    }

    /**
     * Set parallelCapacitance
     *
     * @param string $parallelCapacitance
     *
     * @return Powerinductor
     */
    public function setParallelCapacitance($parallelCapacitance)
    {
        $this->parallelCapacitance = $parallelCapacitance;

        return $this;
    }

    /**
     * Get parallelCapacitance
     *
     * @return string
     */
    public function getParallelCapacitance()
    {
        return $this->parallelCapacitance;
    }

    /**
     * Set selfResonanFrequency
     *
     * @param string $selfResonanFrequency
     *
     * @return Powerinductor
     */
    public function setSelfResonanFrequency($selfResonanFrequency)
    {
        $this->selfResonanFrequency = $selfResonanFrequency;

        return $this;
    }

    /**
     * Get selfResonanFrequency
     *
     * @return string
     */
    public function getSelfResonanFrequency()
    {
        return $this->selfResonanFrequency;
    }

    /**
     * Set rk
     *
     * @param string $rk
     *
     * @return Powerinductor
     */
    public function setRk($rk)
    {
        $this->rk = $rk;

        return $this;
    }

    /**
     * Get rk
     *
     * @return string
     */
    public function getRk()
    {
        return $this->rk;
    }

    /**
     * Set rv
     *
     * @param string $rv
     *
     * @return Powerinductor
     */
    public function setRv($rv)
    {
        $this->rv = $rv;

        return $this;
    }

    /**
     * Get rv
     *
     * @return string
     */
    public function getRv()
    {
        return $this->rv;
    }

    /**
     * Set rt
     *
     * @param string $rt
     *
     * @return Powerinductor
     */
    public function setRt($rt)
    {
        $this->rt = $rt;

        return $this;
    }

    /**
     * Get rt
     *
     * @return string
     */
    public function getRt()
    {
        return $this->rt;
    }

    /**
     * Set rr
     *
     * @param string $rr
     *
     * @return Powerinductor
     */
    public function setRr($rr)
    {
        $this->rr = $rr;

        return $this;
    }

    /**
     * Get rr
     *
     * @return string
     */
    public function getRr()
    {
        return $this->rr;
    }

    /**
     * Set rs
     *
     * @param string $rs
     *
     * @return Powerinductor
     */
    public function setRs($rs)
    {
        $this->rs = $rs;

        return $this;
    }

    /**
     * Get rs
     *
     * @return string
     */
    public function getRs()
    {
        return $this->rs;
    }

    /**
     * Set warmingFactor
     *
     * @param string $warmingFactor
     *
     * @return Powerinductor
     */
    public function setWarmingFactor($warmingFactor)
    {
        $this->warmingFactor = $warmingFactor;

        return $this;
    }

    /**
     * Get warmingFactor
     *
     * @return string
     */
    public function getWarmingFactor()
    {
        return $this->warmingFactor;
    }

    /**
     * Set warmingExp
     *
     * @param string $warmingExp
     *
     * @return Powerinductor
     */
    public function setWarmingExp($warmingExp)
    {
        $this->warmingExp = $warmingExp;

        return $this;
    }

    /**
     * Get warmingExp
     *
     * @return string
     */
    public function getWarmingExp()
    {
        return $this->warmingExp;
    }

    /**
     * Set icrackPower
     *
     * @param string $icrackPower
     *
     * @return Powerinductor
     */
    public function setIcrackPower($icrackPower)
    {
        $this->icrackPower = $icrackPower;

        return $this;
    }

    /**
     * Get icrackPower
     *
     * @return string
     */
    public function getIcrackPower()
    {
        return $this->icrackPower;
    }

    /**
     * Set icrackPoweremi
     *
     * @param string $icrackPoweremi
     *
     * @return Powerinductor
     */
    public function setIcrackPoweremi($icrackPoweremi)
    {
        $this->icrackPoweremi = $icrackPoweremi;

        return $this;
    }

    /**
     * Get icrackPoweremi
     *
     * @return string
     */
    public function getIcrackPoweremi()
    {
        return $this->icrackPoweremi;
    }

    /**
     * Set icrackEmi
     *
     * @param string $icrackEmi
     *
     * @return Powerinductor
     */
    public function setIcrackEmi($icrackEmi)
    {
        $this->icrackEmi = $icrackEmi;

        return $this;
    }

    /**
     * Get icrackEmi
     *
     * @return string
     */
    public function getIcrackEmi()
    {
        return $this->icrackEmi;
    }

    /**
     * Set icrackMouser
     *
     * @param string $icrackMouser
     *
     * @return Powerinductor
     */
    public function setIcrackMouser($icrackMouser)
    {
        $this->icrackMouser = $icrackMouser;

        return $this;
    }

    /**
     * Get icrackMouser
     *
     * @return string
     */
    public function getIcrackMouser()
    {
        return $this->icrackMouser;
    }
}

