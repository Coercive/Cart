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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setLanguage($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->language, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setRef($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->ref, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setSubscriberCode($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->subscriberCode, $datas, $type);
    }

    /**
     * GET GENDER
     *
     * @return string
     */
    public function getGender(): string
	{
        return (string) $this->_call($this->gender);
    }

    /**
     * SET GENDER
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setGender($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->gender, $datas, $type);
    }

    /**
     * GET COMPANY
     *
     * @return string
     */
    public function getCompany(): string
	{
        return (string) $this->_call($this->company);
    }

    /**
     * SET COMPANY
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setCompany($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->company, $datas, $type);
    }

    /**
     * GET FIRST NAME
     *
     * @return string
     */
    public function getFirstName(): string
	{
        return (string) $this->_call($this->firstName);
    }

    /**
     * SET FIRST NAME
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setFirstName($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->firstName, $datas, $type);
    }

    /**
     * GET LAST NAME
     *
     * @return string
     */
    public function getLastName(): string
	{
        return (string) $this->_call($this->lastName);
    }

    /**
     * SET LAST NAME
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setLastName($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->lastName, $datas, $type);
    }

    /**
     * GET ADDITIONAL NAME
     *
     * @return string
     */
    public function getAdditionalName(): string
	{
        return (string) $this->_call($this->additionalName);
    }

    /**
     * SET ADDITIONAL NAME
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setAdditionalName($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->additionalName, $datas, $type);
    }

    /**
     * GET ADDITIONAL NAME
     *
     * @return string
     */
    public function getAddress(): string
	{
        return (string) $this->_call($this->address);
    }

    /**
     * SET ADDITIONAL NAME
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setAddress($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->address, $datas, $type);
    }

    /**
     * GET ADDITIONAL ADDRESS 1
     *
     * @return string
     */
    public function getAdditionalAddress1(): string
	{
        return (string) $this->_call($this->additionalAddress1);
    }

    /**
     * SET ADDITIONAL ADDRESS 1
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setAdditionalAddress1($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->additionalAddress1, $datas, $type);
    }

    /**
     * GET ADDITIONAL ADDRESS 2
     *
     * @return string
     */
    public function getAdditionalAddress2(): string
	{
        return (string) $this->_call($this->additionalAddress2);
    }

    /**
     * SET ADDITIONAL ADDRESS 2
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setAdditionalAddress2($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->additionalAddress2, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setZip($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->zip, $datas, $type);
    }

    /**
     * GET TOWN
     *
     * @return string
     */
    public function getTown(): string
	{
        return (string) $this->_call($this->town);
    }

    /**
     * SET TOWN
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setTown($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->town, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setCountry($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->country, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setIsoCountry($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->isoCountry, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setPhone($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->phone, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setMobile($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->mobile, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setFax($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->fax, $datas, $type);
    }

    /**
     * GET EMAIL
     *
     * @return string
     */
    public function getEmail(): string
	{
        return (string) $this->_call($this->email);
    }

    /**
     * SET EMAIL
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setEmail($datas, string $type = self::TYPE_AUTO): User
	{
        return $this->_set($this->email, $datas, $type);
    }
}
