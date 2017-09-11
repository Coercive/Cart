<?php
namespace Coercive\Shop\Cart\Ext;

use Coercive\Shop\Cart\User;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Address extends Entity {
    
###########################################################################################################
# BIND ITEMS

	/** @var User */
	private $_oUser = null;

	/**
	 * SINGLETON USER
	 *
	 * @return User
	 */
	public function User() {
		return null === $this->_oUser ? $this->_oUser = new User : $this->_oUser;
	}

###########################################################################################################
# PROPERTIES

    /** @var string|callable */
    private $_sTitle = '';

    /** @var int|string|callable */
    private $_mRef = '';

    /** @var string|callable */
	private $_sType = '';

    /** @var string|callable */
    private $_sGender = '';

    /** @var string|callable */
    private $_sCompany = '';

    /** @var string|callable */
    private $_sFirstName = '';

    /** @var string|callable */
    private $_sLastName = '';

    /** @var string|callable */
    private $_sAdditionalName = '';

    /** @var string|callable */
    private $_sAddress = '';

    /** @var string|callable */
    private $_sAdditionalAddress1 = '';

    /** @var string|callable */
    private $_sAdditionalAddress2 = '';

    /** @var string|callable */
    private $_sZip = '';

    /** @var string|callable */
    private $_sTown = '';

    /** @var string|callable */
    private $_sCountry = '';

    /** @var string|callable */
    private $_sIsoCountry = '';

    /** @var string|callable */
    private $_sPhone = '';

    /** @var string|callable */
    private $_sMobile = '';

    /** @var string|callable */
    private $_sFax = '';

    /** @var string|callable */
    private $_sEmail = '';

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
     * GET GENDER
     *
     * @return string
     */
    public function getGender() {
        return $this->_call($this->_sGender);
    }

    /**
     * SET GENDER
     *
     * @param string|callable $sGender
     * @return $this
     */
    public function setGender($sGender) {
        return $this->_set($this->_sGender, $sGender);
    }

    /**
     * GET COMPANY
     *
     * @return string
     */
    public function getCompany() {
        return $this->_call($this->_sCompany);
    }

    /**
     * SET COMPANY
     *
     * @param string|callable $sCompany
     * @return $this
     */
    public function setCompany($sCompany) {
        return $this->_set($this->_sCompany, $sCompany);
    }

    /**
     * GET FIRST NAME
     *
     * @return string
     */
    public function getFirstName() {
        return $this->_call($this->_sFirstName);
    }

    /**
     * SET FIRST NAME
     *
     * @param string|callable $sFirstName
     * @return $this
     */
    public function setFirstName($sFirstName) {
        return $this->_set($this->_sFirstName, $sFirstName);
    }

    /**
     * GET LAST NAME
     *
     * @return string
     */
    public function getLastName() {
        return $this->_call($this->_sLastName);
    }

    /**
     * SET LAST NAME
     *
     * @param string|callable $sLastName
     * @return $this
     */
    public function setLastName($sLastName) {
        return $this->_set($this->_sLastName, $sLastName);
    }

    /**
     * GET ADDITIONAL NAME
     *
     * @return string
     */
    public function getAdditionalName() {
        return $this->_call($this->_sAdditionalName);
    }

    /**
     * SET ADDITIONAL NAME
     *
     * @param string|callable $sAdditionalName
     * @return $this
     */
    public function setAdditionalName($sAdditionalName) {
        return $this->_set($this->_sAdditionalName, $sAdditionalName);
    }

    /**
     * GET ADDITIONAL NAME
     *
     * @return string
     */
    public function getAddress() {
        return $this->_call($this->_sAddress);
    }

    /**
     * SET ADDITIONAL NAME
     *
     * @param string|callable $sAddress
     * @return $this
     */
    public function setAddress($sAddress) {
        return $this->_set($this->_sAddress, $sAddress);
    }

    /**
     * GET ADDITIONAL ADDRESS 1
     *
     * @return string
     */
    public function getAdditionalAddress1() {
        return $this->_call($this->_sAdditionalAddress1);
    }

    /**
     * SET ADDITIONAL ADDRESS 1
     *
     * @param string|callable $sAdditionalAddress1
     * @return $this
     */
    public function setAdditionalAddress1($sAdditionalAddress1) {
        return $this->_set($this->_sAdditionalAddress1, $sAdditionalAddress1);
    }

    /**
     * GET ADDITIONAL ADDRESS 2
     *
     * @return string
     */
    public function getAdditionalAddress2() {
        return $this->_call($this->_sAdditionalAddress2);
    }

    /**
     * SET ADDITIONAL ADDRESS 2
     *
     * @param string|callable $sAdditionalAddress2
     * @return $this
     */
    public function setAdditionalAddress2($sAdditionalAddress2) {
        return $this->_set($this->_sAdditionalAddress2, $sAdditionalAddress2);
    }

    /**
     * GET ZIP
     *
     * @return string
     */
    public function getZip() {
        return $this->_call($this->_sZip);
    }

    /**
     * SET ZIP
     *
     * @param string|callable $sZip
     * @return $this
     */
    public function setZip($sZip) {
        return $this->_set($this->_sZip, $sZip);
    }

    /**
     * GET TOWN
     *
     * @return string
     */
    public function getTown() {
        return $this->_call($this->_sTown);
    }

    /**
     * SET TOWN
     *
     * @param string|callable $sTown
     * @return $this
     */
    public function setTown($sTown) {
        return $this->_set($this->_sTown, $sTown);
    }

    /**
     * GET COUNTRY
     *
     * @return string
     */
    public function getCountry() {
        return $this->_call($this->_sCountry);
    }

    /**
     * SET COUNTRY
     *
     * @param string|callable $sCountry
     * @return $this
     */
    public function setCountry($sCountry) {
        return $this->_set($this->_sCountry, $sCountry);
    }

    /**
     * GET ISO COUNTRY
     *
     * @return string
     */
    public function getIsoCountry() {
        return $this->_call($this->_sIsoCountry);
    }

    /**
     * SET ISO COUNTRY
     *
     * @param string|callable $sIsoCountry
     * @return $this
     */
    public function setIsoCountry($sIsoCountry) {
        return $this->_set($this->_sIsoCountry, $sIsoCountry);
    }

    /**
     * GET PHONE
     *
     * @return string
     */
    public function getPhone() {
        return $this->_call($this->_sPhone);
    }

    /**
     * SET PHONE
     *
     * @param string|callable $sPhone
     * @return $this
     */
    public function setPhone($sPhone) {
        return $this->_set($this->_sPhone, $sPhone);
    }

    /**
     * GET MOBILE
     *
     * @return string
     */
    public function getMobile() {
        return $this->_call($this->_sMobile);
    }

    /**
     * SET MOBILE
     *
     * @param string|callable $sMobile
     * @return $this
     */
    public function setMobile($sMobile) {
        return $this->_set($this->_sMobile, $sMobile);
    }

    /**
     * GET FAX
     *
     * @return string
     */
    public function getFax() {
        return $this->_call($this->_sFax);
    }

    /**
     * SET FAX
     *
     * @param string|callable $sFax
     * @return $this
     */
    public function setFax($sFax) {
        return $this->_set($this->_sFax, $sFax);
    }

    /**
     * GET EMAIL
     *
     * @return string
     */
    public function getEmail() {
        return $this->_call($this->_sEmail);
    }

    /**
     * SET EMAIL
     *
     * @param string|callable $sEmail
     * @return $this
     */
    public function setEmail($sEmail) {
        return $this->_set($this->_sEmail, $sEmail);
    }

}
