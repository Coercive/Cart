<?php
namespace Coercive\Shop\Cart\Ext;

use Coercive\Shop\Cart\Entity\User;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Address extends Entity
{
###########################################################################################################
# BIND ITEMS

	/** @var User */
	private $user = null;

	/**
	 * SINGLETON USER
	 *
	 * @return User
	 */
	public function User(): User
	{
		return null === $this->user ? $this->user = new User : $this->user;
	}

###########################################################################################################
# PROPERTIES

    /** @var string|callable */
    private $title = '';

    /** @var int|string|callable */
    private $ref = '';

    /** @var string|callable */
	private $type = '';

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

    /** @var string|callable */
    private $zip = '';

    /** @var string|callable */
    private $town = '';

    /** @var string|callable */
    private $country = '';

    /** @var string|callable */
    private $isoCountry = '';

    /** @var string|callable */
    private $phone = '';

    /** @var string|callable */
    private $mobile = '';

    /** @var string|callable */
    private $fax = '';

    /** @var string|callable */
    private $email = '';

###########################################################################################################
# ACCESSORS

    /**
     * GET TITLE
     *
     * @return string
     */
    public function getTitle(): string
	{
        return $this->_call($this->title);
    }

    /**
     * SET TITLE
     *
     * @param string|callable $title
     * @return $this
     */
    public function setTitle($title)
	{
        return $this->_set($this->title, $title);
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
    public function setRef($ref)
	{
        return $this->_set($this->ref, $ref);
    }

    /**
	 * GET TYPE
	 *
	 * @return int|string
	 */
	public function getType()
	{
		return $this->_call($this->type);
	}

	/**
	 * SET TYPE
	 *
	 * @param int|string|callable $type
	 * @return $this
	 */
	public function setType($type)
	{
		return $this->_set($this->type, $type);
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
    public function setGender($gender)
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
    public function setCompany($company)
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
    public function setFirstName($firstName)
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
    public function setLastName($lastName)
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
    public function setAdditionalName($additionalName)
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
    public function setAddress($address)
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
    public function setAdditionalAddress1($additionalAddress1)
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
    public function setAdditionalAddress2($additionalAddress2)
	{
        return $this->_set($this->additionalAddress2, $additionalAddress2);
    }

    /**
     * GET ZIP
     *
     * @return string
     */
    public function getZip(): string
	{
        return $this->_call($this->zip);
    }

    /**
     * SET ZIP
     *
     * @param string|callable $zip
     * @return $this
     */
    public function setZip($zip)
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
    public function setTown($town)
	{
        return $this->_set($this->town, $town);
    }

    /**
     * GET COUNTRY
     *
     * @return string
     */
    public function getCountry(): string
	{
        return $this->_call($this->country);
    }

    /**
     * SET COUNTRY
     *
     * @param string|callable $country
     * @return $this
     */
    public function setCountry($country)
	{
        return $this->_set($this->country, $country);
    }

    /**
     * GET ISO COUNTRY
     *
     * @return string
     */
    public function getIsoCountry(): string
	{
        return $this->_call($this->isoCountry);
    }

    /**
     * SET ISO COUNTRY
     *
     * @param string|callable $isoCountry
     * @return $this
     */
    public function setIsoCountry($isoCountry)
	{
        return $this->_set($this->isoCountry, $isoCountry);
    }

    /**
     * GET PHONE
     *
     * @return string
     */
    public function getPhone(): string
	{
        return $this->_call($this->phone);
    }

    /**
     * SET PHONE
     *
     * @param string|callable $phone
     * @return $this
     */
    public function setPhone($phone)
	{
        return $this->_set($this->phone, $phone);
    }

    /**
     * GET MOBILE
     *
     * @return string
     */
    public function getMobile(): string
	{
        return $this->_call($this->mobile);
    }

    /**
     * SET MOBILE
     *
     * @param string|callable $mobile
     * @return $this
     */
    public function setMobile($mobile)
	{
        return $this->_set($this->mobile, $mobile);
    }

    /**
     * GET FAX
     *
     * @return string
     */
    public function getFax(): string
	{
        return $this->_call($this->fax);
    }

    /**
     * SET FAX
     *
     * @param string|callable $fax
     * @return $this
     */
    public function setFax($fax)
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
    public function setEmail($email)
	{
        return $this->_set($this->email, $email);
    }
}
