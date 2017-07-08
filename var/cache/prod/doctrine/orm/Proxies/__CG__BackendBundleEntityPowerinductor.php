<?php

namespace Proxies\__CG__\BackendBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Powerinductor extends \BackendBundle\Entity\Powerinductor implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'type', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'series', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'size', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'orderCode', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'isInternal', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'inductance', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'resistanceDcTyp', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'ratedCurrent', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'ratedCurrentTemperature', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'saturationCurrent', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'sizeLength', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'sizeWidth', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'sizeHeightMax', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'footprint', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'temperatureOpt', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'isAecq', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'shieldingType', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'coreMaterial', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'voltageSec', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'assemblingTechnology', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'parallelResistance', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'parallelCapacitance', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'selfResonanFrequency', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rk', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rv', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rt', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rr', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rs', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'warmingFactor', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'warmingExp', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'icrackPower', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'icrackPoweremi', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'icrackEmi', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'icrackMouser'];
        }

        return ['__isInitialized__', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'id', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'type', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'series', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'size', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'orderCode', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'isInternal', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'inductance', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'resistanceDcTyp', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'ratedCurrent', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'ratedCurrentTemperature', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'saturationCurrent', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'sizeLength', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'sizeWidth', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'sizeHeightMax', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'footprint', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'temperatureOpt', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'isAecq', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'shieldingType', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'coreMaterial', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'voltageSec', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'assemblingTechnology', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'parallelResistance', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'parallelCapacitance', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'selfResonanFrequency', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rk', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rv', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rt', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rr', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'rs', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'warmingFactor', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'warmingExp', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'icrackPower', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'icrackPoweremi', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'icrackEmi', '' . "\0" . 'BackendBundle\\Entity\\Powerinductor' . "\0" . 'icrackMouser'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Powerinductor $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeries($series)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeries', [$series]);

        return parent::setSeries($series);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeries()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeries', []);

        return parent::getSeries();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderCode($orderCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderCode', [$orderCode]);

        return parent::setOrderCode($orderCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderCode', []);

        return parent::getOrderCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsInternal($isInternal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsInternal', [$isInternal]);

        return parent::setIsInternal($isInternal);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsInternal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsInternal', []);

        return parent::getIsInternal();
    }

    /**
     * {@inheritDoc}
     */
    public function setInductance($inductance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInductance', [$inductance]);

        return parent::setInductance($inductance);
    }

    /**
     * {@inheritDoc}
     */
    public function getInductance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInductance', []);

        return parent::getInductance();
    }

    /**
     * {@inheritDoc}
     */
    public function setResistanceDcTyp($resistanceDcTyp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResistanceDcTyp', [$resistanceDcTyp]);

        return parent::setResistanceDcTyp($resistanceDcTyp);
    }

    /**
     * {@inheritDoc}
     */
    public function getResistanceDcTyp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResistanceDcTyp', []);

        return parent::getResistanceDcTyp();
    }

    /**
     * {@inheritDoc}
     */
    public function setRatedCurrent($ratedCurrent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRatedCurrent', [$ratedCurrent]);

        return parent::setRatedCurrent($ratedCurrent);
    }

    /**
     * {@inheritDoc}
     */
    public function getRatedCurrent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRatedCurrent', []);

        return parent::getRatedCurrent();
    }

    /**
     * {@inheritDoc}
     */
    public function setRatedCurrentTemperature($ratedCurrentTemperature)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRatedCurrentTemperature', [$ratedCurrentTemperature]);

        return parent::setRatedCurrentTemperature($ratedCurrentTemperature);
    }

    /**
     * {@inheritDoc}
     */
    public function getRatedCurrentTemperature()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRatedCurrentTemperature', []);

        return parent::getRatedCurrentTemperature();
    }

    /**
     * {@inheritDoc}
     */
    public function setSaturationCurrent($saturationCurrent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSaturationCurrent', [$saturationCurrent]);

        return parent::setSaturationCurrent($saturationCurrent);
    }

    /**
     * {@inheritDoc}
     */
    public function getSaturationCurrent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSaturationCurrent', []);

        return parent::getSaturationCurrent();
    }

    /**
     * {@inheritDoc}
     */
    public function setSizeLength($sizeLength)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSizeLength', [$sizeLength]);

        return parent::setSizeLength($sizeLength);
    }

    /**
     * {@inheritDoc}
     */
    public function getSizeLength()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSizeLength', []);

        return parent::getSizeLength();
    }

    /**
     * {@inheritDoc}
     */
    public function setSizeWidth($sizeWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSizeWidth', [$sizeWidth]);

        return parent::setSizeWidth($sizeWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getSizeWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSizeWidth', []);

        return parent::getSizeWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setSizeHeightMax($sizeHeightMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSizeHeightMax', [$sizeHeightMax]);

        return parent::setSizeHeightMax($sizeHeightMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getSizeHeightMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSizeHeightMax', []);

        return parent::getSizeHeightMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setFootprint($footprint)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFootprint', [$footprint]);

        return parent::setFootprint($footprint);
    }

    /**
     * {@inheritDoc}
     */
    public function getFootprint()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFootprint', []);

        return parent::getFootprint();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemperatureOpt($temperatureOpt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemperatureOpt', [$temperatureOpt]);

        return parent::setTemperatureOpt($temperatureOpt);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemperatureOpt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemperatureOpt', []);

        return parent::getTemperatureOpt();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAecq($isAecq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAecq', [$isAecq]);

        return parent::setIsAecq($isAecq);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsAecq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsAecq', []);

        return parent::getIsAecq();
    }

    /**
     * {@inheritDoc}
     */
    public function setShieldingType($shieldingType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShieldingType', [$shieldingType]);

        return parent::setShieldingType($shieldingType);
    }

    /**
     * {@inheritDoc}
     */
    public function getShieldingType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShieldingType', []);

        return parent::getShieldingType();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoreMaterial($coreMaterial)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoreMaterial', [$coreMaterial]);

        return parent::setCoreMaterial($coreMaterial);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoreMaterial()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoreMaterial', []);

        return parent::getCoreMaterial();
    }

    /**
     * {@inheritDoc}
     */
    public function setVoltageSec($voltageSec)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVoltageSec', [$voltageSec]);

        return parent::setVoltageSec($voltageSec);
    }

    /**
     * {@inheritDoc}
     */
    public function getVoltageSec()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVoltageSec', []);

        return parent::getVoltageSec();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssemblingTechnology($assemblingTechnology)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssemblingTechnology', [$assemblingTechnology]);

        return parent::setAssemblingTechnology($assemblingTechnology);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssemblingTechnology()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssemblingTechnology', []);

        return parent::getAssemblingTechnology();
    }

    /**
     * {@inheritDoc}
     */
    public function setParallelResistance($parallelResistance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParallelResistance', [$parallelResistance]);

        return parent::setParallelResistance($parallelResistance);
    }

    /**
     * {@inheritDoc}
     */
    public function getParallelResistance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParallelResistance', []);

        return parent::getParallelResistance();
    }

    /**
     * {@inheritDoc}
     */
    public function setParallelCapacitance($parallelCapacitance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParallelCapacitance', [$parallelCapacitance]);

        return parent::setParallelCapacitance($parallelCapacitance);
    }

    /**
     * {@inheritDoc}
     */
    public function getParallelCapacitance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParallelCapacitance', []);

        return parent::getParallelCapacitance();
    }

    /**
     * {@inheritDoc}
     */
    public function setSelfResonanFrequency($selfResonanFrequency)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSelfResonanFrequency', [$selfResonanFrequency]);

        return parent::setSelfResonanFrequency($selfResonanFrequency);
    }

    /**
     * {@inheritDoc}
     */
    public function getSelfResonanFrequency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSelfResonanFrequency', []);

        return parent::getSelfResonanFrequency();
    }

    /**
     * {@inheritDoc}
     */
    public function setRk($rk)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRk', [$rk]);

        return parent::setRk($rk);
    }

    /**
     * {@inheritDoc}
     */
    public function getRk()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRk', []);

        return parent::getRk();
    }

    /**
     * {@inheritDoc}
     */
    public function setRv($rv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRv', [$rv]);

        return parent::setRv($rv);
    }

    /**
     * {@inheritDoc}
     */
    public function getRv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRv', []);

        return parent::getRv();
    }

    /**
     * {@inheritDoc}
     */
    public function setRt($rt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRt', [$rt]);

        return parent::setRt($rt);
    }

    /**
     * {@inheritDoc}
     */
    public function getRt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRt', []);

        return parent::getRt();
    }

    /**
     * {@inheritDoc}
     */
    public function setRr($rr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRr', [$rr]);

        return parent::setRr($rr);
    }

    /**
     * {@inheritDoc}
     */
    public function getRr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRr', []);

        return parent::getRr();
    }

    /**
     * {@inheritDoc}
     */
    public function setRs($rs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRs', [$rs]);

        return parent::setRs($rs);
    }

    /**
     * {@inheritDoc}
     */
    public function getRs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRs', []);

        return parent::getRs();
    }

    /**
     * {@inheritDoc}
     */
    public function setWarmingFactor($warmingFactor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWarmingFactor', [$warmingFactor]);

        return parent::setWarmingFactor($warmingFactor);
    }

    /**
     * {@inheritDoc}
     */
    public function getWarmingFactor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWarmingFactor', []);

        return parent::getWarmingFactor();
    }

    /**
     * {@inheritDoc}
     */
    public function setWarmingExp($warmingExp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWarmingExp', [$warmingExp]);

        return parent::setWarmingExp($warmingExp);
    }

    /**
     * {@inheritDoc}
     */
    public function getWarmingExp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWarmingExp', []);

        return parent::getWarmingExp();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcrackPower($icrackPower)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcrackPower', [$icrackPower]);

        return parent::setIcrackPower($icrackPower);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcrackPower()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcrackPower', []);

        return parent::getIcrackPower();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcrackPoweremi($icrackPoweremi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcrackPoweremi', [$icrackPoweremi]);

        return parent::setIcrackPoweremi($icrackPoweremi);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcrackPoweremi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcrackPoweremi', []);

        return parent::getIcrackPoweremi();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcrackEmi($icrackEmi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcrackEmi', [$icrackEmi]);

        return parent::setIcrackEmi($icrackEmi);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcrackEmi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcrackEmi', []);

        return parent::getIcrackEmi();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcrackMouser($icrackMouser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcrackMouser', [$icrackMouser]);

        return parent::setIcrackMouser($icrackMouser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcrackMouser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcrackMouser', []);

        return parent::getIcrackMouser();
    }

}