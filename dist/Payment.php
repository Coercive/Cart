<?php
namespace Coercive\Shop\Cart;

use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Payment extends Entity {

###########################################################################################################
# PROPERTIES

    /** @var string|callable */
    private $_sRef = '';

    /** @var string|callable */
    private $_sToken = '';

    /** @var string|callable */
    private $_sTitle = '';

    /** @var string|callable */
    private $_sResume = '';

    /** @var string|callable */
    private $_sDescription = '';

    /** @var string|callable */
    private $_sMode = '';

    /** @var string|callable */
    private $_sType = '';

    /** @var string|callable */
    private $_sCurrency = '';

    /** @var float|callable */
    private $_fRate = 0;

###########################################################################################################
# ACCESSORS

    /**
     * GET REF
     *
     * @return string
     */
    public function getRef() {
        return $this->_call($this->_sRef);
    }

    /**
     * SET REF
     *
     * @param string|callable $sRef
     * @return $this
     */
    public function setRef($sRef) {
        return $this->_set($this->_sRef, $sRef);
    }

    /**
     * GET TOKEN
     *
     * @return string
     */
    public function getToken() {
        return $this->_call($this->_sToken);
    }

    /**
     * SET TOKEN
     *
     * @param string|callable $sToken
     * @return $this
     */
    public function setToken($sToken) {
        return $this->_set($this->_sToken, $sToken);
    }

    /**
     * GET TITLE
     *
     * @return string
     */
    public function getTitle() {
        return $this->_call($this->_sTitle);
    }

    /**
     * SET TITLE
     *
     * @param string|callable $sTitle
     * @return $this
     */
    public function setTitle($sTitle) {
        return $this->_set($this->_sTitle, $sTitle);
    }

    /**
     * GET RESUME
     *
     * @return string
     */
    public function getResume() {
        return $this->_call($this->_sResume);
    }

    /**
     * SET RESUME
     *
     * @param string|callable $sResume
     * @return $this
     */
    public function setResume($sResume) {
        return $this->_set($this->_sResume, $sResume);
    }

    /**
     * GET DESCRIPTION
     *
     * @return string
     */
    public function getDescription() {
        return $this->_call($this->_sDescription);
    }

    /**
     * SET DESCRIPTION
     *
     * @param string|callable $sDescription
     * @return $this
     */
    public function setDescription($sDescription) {
        return $this->_set($this->_sDescription, $sDescription);
    }

    /**
     * GET MODE
     *
     * @return string
     */
    public function getMode() {
        return $this->_call($this->_sMode);
    }

    /**
     * SET MODE
     *
     * @param string|callable $sMode
     * @return $this
     */
    public function setMode($sMode) {
        return $this->_set($this->_sMode, $sMode);
    }

    /**
     * GET TYPE
     *
     * @return string
     */
    public function getType() {
        return $this->_call($this->_sType);
    }

    /**
     * SET TYPE
     *
     * @param string|callable $sType
     * @return $this
     */
    public function setType($sType) {
        return $this->_set($this->_sType, $sType);
    }

    /**
     * GET CURRENCY
     *
     * @return string
     */
    public function getCurrency() {
        return $this->_call($this->_sCurrency);
    }

    /**
     * SET CURRENCY
     *
     * @param string|callable $sCurrency
     * @return $this
     */
    public function setCurrency($sCurrency) {
        return $this->_set($this->_sCurrency, $sCurrency);
    }

    /**
     * GET RATE
     *
     * @return float
     */
    public function getRate() {
        return $this->_call($this->_fRate);
    }

    /**
     * SET RATE
     *
     * @param float|callable $fRate
     * @return $this
     */
    public function setRate($fRate) {
        return $this->_set($this->_fRate, $fRate);
    }

}
