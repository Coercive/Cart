<?php
namespace Coercive\Shop\Cart;

use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Promo extends Entity {

###########################################################################################################
# PROCESS

    /**
     * CALC
     *
     * @param float $fPrice
     * @return float
     */
    public function calc($fPrice) {

        # PRICE CUT
        if($fPriceCut = $this->getPriceCut()) {
            return $fPrice - $fPriceCut;
        }

        # PERCENT
        if($fPercent = $this->getPercent()) {
            return $fPrice - $fPrice * $fPercent;
        }

        # INACTIVE
        return 0;

    }

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
    private $_fPercent = 0;

    /** @var string|callable */
    private $_fPriceCut = 0;

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
     * GET PERCENT
     *
     * @return string
     */
    public function getPercent() {
        return $this->_call($this->_fPercent);
    }

    /**
     * SET PERCENT
     *
     * @param string|callable $sPercent
     * @return $this
     */
    public function setPercent($sPercent) {
        return $this->_set($this->_fPercent, $sPercent);
    }

    /**
     * GET PRICE CUT
     *
     * @return string
     */
    public function getPriceCut() {
        return $this->_call($this->_fPriceCut);
    }

    /**
     * SET PRICE CUT
     *
     * @param string|callable $sPriceCut
     * @return $this
     */
    public function setPriceCut($sPriceCut) {
        return $this->_set($this->_fPriceCut, $sPriceCut);
    }

}
