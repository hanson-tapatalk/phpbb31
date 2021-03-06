<?php

defined('MBQ_IN_IT') or exit;

/**
 * value class
 */
Class MbqValue {

    private $hasSetCfgValueType;   /* has set cfgValueType */
    /* corresponding config value type in MbqConfig::$cfg when the value is config value.ref MbqFdtConfig::$df['otherDefine']['cfgValueType'] */
    private $cfgValueType;

    private $hasSetOriValue;   /* has set oriValue flag */
    private $hasSetAppDisplayValue;   /* has set appDisplayValue flag */
    private $hasSetTmlDisplayValue;   /* has set tmlDisplayValue flag */
    private $hasSetTmlDisplayValueNoHtml;   /* has set tmlDisplayValueNoHtml flag */
    private $hasSetTmlDisplayValueAdvancedHtml;   /* has set tmlDisplayValueAdvancedHtml flag */
    private $hasSetMnDisplayValue;      /* has set mnDisplayValue */

    /* you should set values by set method!!!because the set method will do more work on flag instead of only assignment. */
    public $oriValue;   /* original value saved in application */
    public $appDisplayValue;    /* handled internally by application and displayed in application */
    public $tmlDisplayValue;    /* handled by tapatalk and displayed in terminal application,mobile etc.return_html = 1. */
    public $tmlDisplayValueNoHtml;    /* handled by tapatalk and displayed in terminal application,mobile etc.return_html = 0. */
    public $tmlDisplayValueAdvancedHtml;    /* handled by tapatalk and displayed in terminal application,mobile etc.return_html = 2. */
    public $mnDisplayValue;         /* mini site display value */

    /**
     * @param  Array  $p  params for create the object.
     * $p['cfgValueType']
     * $p['oriValue']
     * $p['appDisplayValue']
     * $p['tmlDisplayValue']
     * $p['tmlDisplayValueNoHtml']
     */
    public function __construct($p = NULL) {
        if (is_array($p) && $p) {
            if (isset($p['cfgValueType'])) $this->setCfgValueType($p['cfgValueType']);
            if (isset($p['oriValue'])) $this->setOriValue($p['oriValue']);
            if (isset($p['appDisplayValue'])) $this->setAppDisplayValue($p['appDisplayValue']);
            if (isset($p['tmlDisplayValue'])) $this->setTmlDisplayValue($p['tmlDisplayValue']);
            if (isset($p['tmlDisplayValueNoHtml'])) $this->setTmlDisplayValueNoHtml($p['tmlDisplayValueNoHtml']);
            if (isset($p['tmlDisplayValueAdvancedHtml'])) $this->setTmlDisplayValueAdvancedHtml($p['tmlDisplayValueAdvancedHtml']);
        }
    }

    /**
     * set cfgValueType
     *
     * @param  Mixed  $v
     */
    public function setCfgValueType($v) {
        $this->cfgValueType = $v;
        $this->hasSetCfgValueType = true;
    }

    /**
     * judge the cfgValueType has been set
     *
     * @return  Boolean
     */
    public function hasSetCfgValueType() {
        return $this->hasSetCfgValueType;
    }

    /**
     * judge is adv cfgValueType
     */
    public function isAdvCfgValueType() {
        return ($this->hasSetCfgValueType() && $this->cfgValueType == MbqBaseFdt::getFdt('MbqFdtConfig.otherDefine.cfgValueType.range.adv')) ? TRUE : FALSE;
    }

    /**
     * judge is all cfgValueType
     */
    public function isAllCfgValueType() {
        return ($this->hasSetCfgValueType() && $this->cfgValueType == MbqBaseFdt::getFdt('MbqFdtConfig.otherDefine.cfgValueType.range.all')) ? TRUE : FALSE;
    }

    /**
     * judge the oriValue has been set
     *
     * @return  Boolean
     */
    public function hasSetOriValue() {
        return $this->hasSetOriValue;
    }

    /**
     * judge the appDisplayValue has been set
     *
     * @return  Boolean
     */
    public function hasSetAppDisplayValue() {
        return $this->hasSetAppDisplayValue;
    }

    /**
     * judge the tmlDisplayValue has been set
     *
     * @return  Boolean
     */
    public function hasSetTmlDisplayValue() {
        return $this->hasSetTmlDisplayValue;
    }

    /**
     * judge the tmlDisplayValueNoHtml has been set
     *
     * @return  Boolean
     */
    public function hasSetTmlDisplayValueNoHtml() {
        return $this->hasSetTmlDisplayValueNoHtml;
    }

    /**
     * judge the tmlDisplayValueAdvancedHtml has been set
     *
     * @return  Boolean
     */
    public function hasSetTmlDisplayValueAdvancedHtml() {
        return $this->hasSetTmlDisplayValueAdvancedHtml;
    }

    /**
     * judge the mnDisplayValue has been set
     *
     * @return  Boolean
     */
    public function hasSetMnDisplayValue() {
        return $this->hasSetMnDisplayValue;
    }

    /**
     * set oriValue
     *
     * @param  Mixed  $v
     */
    public function setOriValue($v) {
        $this->oriValue = $v;
        $this->hasSetOriValue = true;
    }
    /**
     * set safeOriValueFromArray
     *
     * @param  Mixed  $v
     */
    public function setSafeOriValueFromArray($array, $index, $defaultValue = null) {
        if(isset($array[$index]))
        {
            $v = $array[$index];
        }
        elseif(isset($defaultValue))
        {
            $v = $defaultValue;
        }
        if(isset($v))
        {
            $this->oriValue = $v;
            $this->hasSetOriValue = true;
        }
    }
    /**
     * set oriValue
     *
     * @param  Mixed  $v
     */
    public function setSafeOriValueFromObject($object, $index, $defaultValue = null) {
        if(isset($object->$index))
        {
            $v = $object->$index;
        }
        elseif(isset($defaultValue))
        {
            $v = $defaultValue;
        }
        if(isset($v))
        {
            $this->oriValue = $v;
            $this->hasSetOriValue = true;
        }
    }
    /**
     * set appDisplayValue
     *
     * @param  Mixed  $v
     */
    public function setAppDisplayValue($v) {
        $this->appDisplayValue = $v;
        $this->hasSetAppDisplayValue = true;
    }

    /**
     * set tmlDisplayValue
     *
     * @param  Mixed  $v
     */
    public function setTmlDisplayValue($v) {
        $this->tmlDisplayValue = $v;
        $this->hasSetTmlDisplayValue = true;
    }

    /**
     * set tmlDisplayValueNoHtml
     *
     * @param  Mixed  $v
     */
    public function setTmlDisplayValueNoHtml($v) {
        $this->tmlDisplayValueNoHtml = $v;
        $this->hasSetTmlDisplayValueNoHtml = true;
    }

    /**
     * set tmlDisplayValueNoHtml
     *
     * @param  Mixed  $v
     */
    public function setTmlDisplayValueAdvancedHtml($v) {
        $this->tmlDisplayValueAdvancedHtml = $v;
        $this->hasSetTmlDisplayValueAdvancedHtml = true;
    }

    /**
     * set mnDisplayValue
     *
     * @param  Mixed  $v
     */
    public function setMnDisplayValue($v) {
        $this->mnDisplayValue = $v;
        $this->hasSetMnDisplayValue = true;
    }

}
