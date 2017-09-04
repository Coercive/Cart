<?php
namespace Coercive\Shop\Cart;

use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Item extends Entity {

###########################################################################################################
# BIND ITEMS

    /** @var Shipping */
    private $_oShipping = null;

    /** @var Gift */
    private $_oGift = null;

    /** @var Promo */
    private $_oPromo = null;

    /**
     * SINGLETON SHIPPING
     *
     * @return Shipping
     */
    public function Shipping() {
        return null === $this->_oShipping ? $this->_oShipping = new Shipping : $this->_oShipping;
    }

    /**
     * SINGLETON GIFT
     *
     * @return Gift
     */
    public function Gift() {
        return null === $this->_oGift ? $this->_oGift = new Gift : $this->_oGift;
    }

    /**
     * SINGLETON PROMO
     *
     * @return Promo
     */
    public function Promo() {
        return null === $this->_oPromo ? $this->_oPromo = new Promo : $this->_oPromo;
    }

###########################################################################################################
# PROPERTIES

    /** @var string|callable */
    private $_sTitle = '';

    /** @var string|callable */
    private $_sResume = '';

    /** @var string|callable */
    private $_sDescription = '';

    /** @var float|callable */
    private $_fPrice = 0;

    /** @var float|callable */
    private $_fPriceExcludingTaxes = 0;

    /** @var float|callable */
    private $_fPriceIncludingTaxes = 0;

    /** @var float|callable */
    private $_fUnitPrice = 0;

    /** @var float|callable */
    private $_fUnitPriceExcludingTaxes = 0;

    /** @var float|callable */
    private $_fUnitPriceIncludingTaxes = 0;

    /** @var float|callable */
    private $_fVatRate = 0;

    /** @var int|callable */
    private $_iQuantity = 0;

    /** @var int|string|callable */
    private $_mRef = '';

    /** @var string|callable */
    private $_sType = '';

    /** @var string|callable */
	private $_sMedium = '';

    /** @var string|callable */
    private $_sImage = '';

    /** @var string|callable */
    private $_sThumbnail = '';

    /** @var string|callable */
    private $_sUrl = '';

    /** @var string|callable */
    private $_sStartDate = '';

    /** @var string|callable */
    private $_sEndDate = '';

    /** @var int|string|callable */
    private $_mStartId = '';

    /** @var int|string|callable */
    private $_mEndId = '';

###########################################################################################################
# ACCESSORS

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
     * GET PRICE
     *
     * @return float
     */
    public function getPrice() {
        return $this->_call($this->_fPrice);
    }

    /**
     * SET PRICE
     *
     * @param float|callable $fPrice
     * @return $this
     */
    public function setPrice($fPrice) {
        return $this->_set($this->_fPrice, $fPrice);
    }

    /**
     * GET PRICE EXCLUDING TAXES
     *
     * @return float
     */
    public function getPriceExcludingTaxes() {
        return $this->_call($this->_fPriceExcludingTaxes);
    }

    /**
     * SET PRICE EXCLUDING TAXES
     *
     * @param float|callable $fPriceExcludingTaxes
     * @return $this
     */
    public function setPriceExcludingTaxes($fPriceExcludingTaxes) {
        return $this->_set($this->_fPriceExcludingTaxes, $fPriceExcludingTaxes);
    }

    /**
     * GET PRICE INCLUDING TAXES
     *
     * @return float
     */
    public function getPriceIncludingTaxes() {
        return $this->_call($this->_fPriceIncludingTaxes);
    }

    /**
     * SET PRICE INCLUDING TAXES
     *
     * @param float|callable $fPriceIncludingTaxes
     * @return $this
     */
    public function setPriceIncludingTaxes($fPriceIncludingTaxes) {
        return $this->_set($this->_fPriceIncludingTaxes, $fPriceIncludingTaxes);
    }

    /**
     * GET UNIT PRICE
     *
     * @return float
     */
    public function getUnitPrice() {
        return $this->_call($this->_fUnitPrice);
    }

    /**
     * SET UNIT PRICE
     *
     * @param string|callable $fUnitPrice
     * @return $this
     */
    public function setUnitPrice($fUnitPrice) {
        return $this->_set($this->_fUnitPrice, $fUnitPrice);
    }

    /**
     * GET UNIT PRICE EXCLUDING TAXES
     *
     * @return float
     */
    public function getUnitPriceExcludingTaxes() {
        return $this->_call($this->_fUnitPriceExcludingTaxes);
    }

    /**
     * SET UNIT PRICE EXCLUDING TAXES
     *
     * @param float|callable $fUnitPriceExcludingTaxes
     * @return $this
     */
    public function setUnitPriceExcludingTaxes($fUnitPriceExcludingTaxes) {
        return $this->_set($this->_fUnitPriceExcludingTaxes, $fUnitPriceExcludingTaxes);
    }

    /**
     * GET UNIT PRICE INCLUDING TAXES
     *
     * @return float
     */
    public function getUnitPriceIncludingTaxes() {
        return $this->_call($this->_fUnitPriceIncludingTaxes);
    }

    /**
     * SET UNIT PRICE INCLUDING TAXES
     *
     * @param float|callable $fUnitPriceIncludingTaxes
     * @return $this
     */
    public function setUnitPriceIncludingTaxes($fUnitPriceIncludingTaxes) {
        return $this->_set($this->_fUnitPriceIncludingTaxes, $fUnitPriceIncludingTaxes);
    }

    /**
     * GET VAT RATE
     *
     * @return float
     */
    public function getVatRate() {
        return $this->_call($this->_fVatRate);
    }

    /**
     * SET VAT RATE
     *
     * @param float|callable $fVatRate
     * @return $this
     */
    public function setVatRate($fVatRate) {
        return $this->_set($this->_fVatRate, $fVatRate);
    }

    /**
     * GET QUANTITY
     *
     * @return int
     */
    public function getQuantity() {
        return $this->_call($this->_iQuantity);
    }

    /**
     * SET QUANTITY
     *
     * @param int|callable $iQuantity
     * @return $this
     */
    public function setQuantity($iQuantity) {
        return $this->_set($this->_iQuantity, $iQuantity);
    }

    /**
     * GET REF
     *
     * @return int|string
     */
    public function getRef() {
        return $this->_call($this->_mRef);
    }

    /**
     * SET REF
     *
     * @param int|string|callable $mRef
     * @return $this
     */
    public function setRef($mRef) {
        return $this->_set($this->_mRef, $mRef);
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
	 * GET MEDIUM
	 *
	 * @return string
	 */
	public function getMedium() {
		return $this->_call($this->_sMedium);
	}

	/**
	 * SET MEDIUM
	 *
	 * @param string|callable $sMedium
	 * @return $this
	 */
	public function setMedium($sMedium) {
		return $this->_set($this->_sMedium, $sMedium);
	}

    /**
     * GET IMAGE
     *
     * @return string
     */
    public function getImage() {
        return $this->_call($this->_sImage);
    }

    /**
     * SET IMAGE
     *
     * @param string|callable $sImage
     * @return $this
     */
    public function setImage($sImage) {
        return $this->_set($this->_sImage, $sImage);
    }

    /**
     * GET THUMBNAIL
     *
     * @return string
     */
    public function getThumbnail() {
        return $this->_call($this->_sThumbnail);
    }

    /**
     * SET THUMBNAIL
     *
     * @param string|callable $sThumbnail
     * @return $this
     */
    public function setThumbnail($sThumbnail) {
        return $this->_set($this->_sThumbnail, $sThumbnail);
    }

    /**
     * GET URL
     *
     * @return string
     */
    public function getUrl() {
        return $this->_call($this->_sUrl);
    }

    /**
     * SET URL
     *
     * @param string|callable $sUrl
     * @return $this
     */
    public function setUrl($sUrl) {
        return $this->_set($this->_sUrl, $sUrl);
    }

    /**
     * GET START DATE
     *
     * @return string
     */
    public function getStartDate() {
        return $this->_call($this->_sStartDate);
    }

    /**
     * SET START DATE
     *
     * @param string|callable $sStartDate
     * @return $this
     */
    public function setStartDate($sStartDate) {
        return $this->_set($this->_sStartDate, $sStartDate);
    }

    /**
     * GET END DATE
     *
     * @return string
     */
    public function getEndDate() {
        return $this->_call($this->_sEndDate);
    }

    /**
     * SET END DATE
     *
     * @param string|callable $sEndDate
     * @return $this
     */
    public function setEndDate($sEndDate) {
        return $this->_set($this->_sEndDate, $sEndDate);
    }

    /**
     * GET START ID
     *
     * @return int|string
     */
    public function getStartId() {
        return $this->_call($this->_mStartId);
    }

    /**
     * SET START ID
     *
     * @param string|callable $mStartId
     * @return $this
     */
    public function setStartId($mStartId) {
        return $this->_set($this->_mStartId, $mStartId);
    }

    /**
     * GET END ID
     *
     * @return int|string
     */
    public function getEndId() {
        return $this->_call($this->_mEndId);
    }

    /**
     * SET END ID
     *
     * @param string|callable $mEndId
     * @return $this
     */
    public function setEndId($mEndId) {
        return $this->_set($this->_mEndId, $mEndId);
    }

}
