<?php
namespace Coercive\Shop\Cart\Entity;

use Coercive\Shop\Cart\Ext\Address;
use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class User extends Entity
{
###########################################################################################################
# BIND ITEMS

	/** @var Billing */
	private $billing = null;

	/** @var Shipping */
	private $shipping = null;

	/**
	 * SINGLETON BILLING
	 *
	 * @param Address $billing [optional]
	 * @return Address|Billing
	 */
	public function Billing(Address $billing = null): Address
	{
		if($billing) { return $this->billing = $billing; }
		return null === $this->billing ? $this->billing = new Billing : $this->billing;
	}

	/**
	 * SINGLETON SHIPPING
	 *
	 * @param Address $shipping [optional]
	 * @return Address|Shipping
	 */
	public function Shipping(Address $shipping = null): Address
	{
		if($shipping) { return $this->shipping = $shipping; }
		return null === $this->shipping ? $this->shipping = new Shipping : $this->shipping;
	}

###########################################################################################################
# PROPERTIES

    /** @var int|string|callable */
    private $language = '';

    /** @var int|string|callable */
    private $ref = '';

    /** @var int|string|callable */
    private $subscriberCode = '';

    /** @var string|callable */
    private $gender = '';

    /** @var string|callable */
    private $company = '';

    /** @var string|callable */
    private $firstName = '';

    /** @var string|callable */
    private $lastName = '';

    /** @var string|callable */
    private $additionalName = '';

    /** @var string|callable */
    private $address = '';

    /** @var string|callable */
    private $additionalAddress1 = '';

    /** @var string|callable */
    private $additionalAddress2 = '';

    /** @var int|string|callable */
    private $zip = '';

    /** @var string|callable */
    private $town = '';

    /** @var int|string|callable */
    private $country = '';

    /** @var int|string|callable */
    private $isoCountry = '';

    /** @var int|string|callable */
    private $phone = '';

    /** @var int|string|callable */
    private $mobile = '';

    /** @var int|string|callable */
    private $fax = '';

    /** @var string|callable */
    private $email = '';

###########################################################################################################
# ACCESSORS

    /**
     * GET LANGUAGE
     *
     * @return int|string
     */
    public function getLanguage()
	{
        return $this->_call($this->language);
    }

    /**
     * SET LANGUAGE
     *
     * @param int|string|callable $language
     * @return $this
     */
    public function setLanguage($language): User
	{
        return $this->_set($this->language, $language);
    }

    /**
     * GET REF
     *
     * @return int|string
     */
    public function getRef()
	{
        return $this->_call($this->ref);
    }

    /**
     * SET REF
     *
     * @param int|string|callable $ref
     * @return $this
     */
    public function setRef($ref): User
	{
        return $this->_set($this->ref, $ref);
    }

    /**
     * GET SUBSCRIBER CODE
     *
     * @return int|string
     */
    public function getSubscriberCode()
	{
        return $this->_call($this->subscriberCode);
    }

    /**
     * SET SUBSCRIBER CODE
     *
     * @param int|string|callable $subscriberCode
     * @return $this
     */
    public function setSubscriberCode($subscriberCode): User
	{
        return $this->_set($this->subscriberCode, $subscriberCode);
    }

    /**
     * GET GENDER
     *
     * @return string
     */
    public function getGender(): string
	{
        return $this->_call($this->gender);
    }

    /**
     * SET GENDER
     *
     * @param string|callable $gender
     * @return $this
     */
    public function setGender($gender): User
	{
        return $this->_set($this->gender, $gender);
    }

    /**
     * GET COMPANY
     *
     * @return string
     */
    public function getCompany(): string
	{
        return $this->_call($this->company);
    }

    /**
     * SET COMPANY
     *
     * @param string|callable $company
     * @return $this
     */
    public function setCompany($company): User
	{
        return $this->_set($this->company, $company);
    }

    /**
     * GET FIRST NAME
     *
     * @return string
     */
    public function getFirstName(): string
	{
        return $this->_call($this->firstName);
    }

    /**
     * SET FIRST NAME
     *
     * @param string|callable $firstName
     * @return $this
     */
    public function setFirstName($firstName): User
	{
        return $this->_set($this->firstName, $firstName);
    }

    /**
     * GET LAST NAME
     *
     * @return string
     */
    public function getLastName(): string
	{
        return $this->_call($this->lastName);
    }

    /**
     * SET LAST NAME
     *
     * @param string|callable $lastName
     * @return $this
     */
    public function setLastName($lastName): User
	{
        return $this->_set($this->lastName, $lastName);
    }

    /**
     * GET ADDITIONAL NAME
     *
     * @return string
     */
    public function getAdditionalName(): string
	{
        return $this->_call($this->additionalName);
    }

    /**
     * SET ADDITIONAL NAME
     *
     * @param string|callable $additionalName
     * @return $this
     */
    public function setAdditionalName($additionalName): User
	{
        return $this->_set($this->additionalName, $additionalName);
    }

    /**
     * GET ADDITIONAL NAME
     *
     * @return string
     */
    public function getAddress(): string
	{
        return $this->_call($this->address);
    }

    /**
     * SET ADDITIONAL NAME
     *
     * @param string|callable $address
     * @return $this
     */
    public function setAddress($address): User
	{
        return $this->_set($this->address, $address);
    }

    /**
     * GET ADDITIONAL ADDRESS 1
     *
     * @return string
     */
    public function getAdditionalAddress1(): string
	{
        return $this->_call($this->additionalAddress1);
    }

    /**
     * SET ADDITIONAL ADDRESS 1
     *
     * @param string|callable $additionalAddress1
     * @return $this
     */
    public function setAdditionalAddress1($additionalAddress1): User
	{
        return $this->_set($this->additionalAddress1, $additionalAddress1);
    }

    /**
     * GET ADDITIONAL ADDRESS 2
     *
     * @return string
     */
    public function getAdditionalAddress2(): string
	{
        return $this->_call($this->additionalAddress2);
    }

    /**
     * SET ADDITIONAL ADDRESS 2
     *
     * @param string|callable $additionalAddress2
     * @return $this
     */
    public function setAdditionalAddress2($additionalAddress2): User
	{
        return $this->_set($this->additionalAddress2, $additionalAddress2);
    }

    /**
     * GET ZIP
     *
     * @return int|string
     */
    public function getZip()
	{
        return $this->_call($this->zip);
    }

    /**
     * SET ZIP
     *
     * @param int|string|callable $zip
     * @return $this
     */
    public function setZip($zip): User
	{
        return $this->_set($this->zip, $zip);
    }

    /**
     * GET TOWN
     *
     * @return string
     */
    public function getTown(): string
	{
        return $this->_call($this->town);
    }

    /**
     * SET TOWN
     *
     * @param string|callable $town
     * @return $this
     */
    public function setTown($town): User
	{
        return $this->_set($this->town, $town);
    }

    /**
     * GET COUNTRY
     *
     * @return int|string
     */
    public function getCountry()
	{
        return $this->_call($this->country);
    }

    /**
     * SET COUNTRY
     *
     * @param int|string|callable $country
     * @return $this
     */
    public function setCountry($country): User
	{
        return $this->_set($this->country, $country);
    }

    /**
     * GET ISO COUNTRY
     *
     * @return int|string
     */
    public function getIsoCountry()
	{
        return $this->_call($this->isoCountry);
    }

    /**
     * SET ISO COUNTRY
     *
     * @param int|string|callable $isoCountry
     * @return $this
     */
    public function setIsoCountry($isoCountry): User
	{
        return $this->_set($this->isoCountry, $isoCountry);
    }

    /**
     * GET PHONE
     *
     * @return int|string
     */
    public function getPhone()
	{
        return $this->_call($this->phone);
    }

    /**
     * SET PHONE
     *
     * @param int|string|callable $phone
     * @return $this
     */
    public function setPhone($phone): User
	{
        return $this->_set($this->phone, $phone);
    }

    /**
     * GET MOBILE
     *
     * @return int|string
     */
    public function getMobile()
	{
        return $this->_call($this->mobile);
    }

    /**
     * SET MOBILE
     *
     * @param int|string|callable $mobile
     * @return $this
     */
    public function setMobile($mobile): User
	{
        return $this->_set($this->mobile, $mobile);
    }

    /**
     * GET FAX
     *
     * @return int|string
     */
    public function getFax()
	{
        return $this->_call($this->fax);
    }

    /**
     * SET FAX
     *
     * @param int|string|callable $fax
     * @return $this
     */
    public function setFax($fax): User
	{
        return $this->_set($this->fax, $fax);
    }

    /**
     * GET EMAIL
     *
     * @return string
     */
    public function getEmail(): string
	{
        return $this->_call($this->email);
    }

    /**
     * SET EMAIL
     *
     * @param string|callable $email
     * @return $this
     */
    public function setEmail($email): User
	{
        return $this->_set($this->email, $email);
    }
}