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

	private ? User $user = null;

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
        return (string) $this->_call($this->title);
    }

    /**
     * SET TITLE
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setTitle($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->title, $datas, $type);
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
    public function setRef($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->ref, $datas, $type);
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
	 * @param int|string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setType($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->type, $datas, $type);
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
    public function setGender($datas, string $type = self::TYPE_AUTO): self
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
    public function setCompany($datas, string $type = self::TYPE_AUTO): self
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
    public function setFirstName($datas, string $type = self::TYPE_AUTO): self
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
    public function setLastName($datas, string $type = self::TYPE_AUTO): self
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
    public function setAdditionalName($datas, string $type = self::TYPE_AUTO): self
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
    public function setAddress($datas, string $type = self::TYPE_AUTO): self
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
    public function setAdditionalAddress1($datas, string $type = self::TYPE_AUTO): self
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
    public function setAdditionalAddress2($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->additionalAddress2, $datas, $type);
    }

    /**
     * GET ZIP
     *
     * @return string
     */
    public function getZip(): string
	{
        return (string) $this->_call($this->zip);
    }

    /**
     * SET ZIP
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setZip($datas, string $type = self::TYPE_AUTO): self
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
    public function setTown($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->town, $datas, $type);
    }

    /**
     * GET COUNTRY
     *
     * @return string
     */
    public function getCountry(): string
	{
        return (string) $this->_call($this->country);
    }

    /**
     * SET COUNTRY
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setCountry($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->country, $datas, $type);
    }

    /**
     * GET ISO COUNTRY
     *
     * @return string
     */
    public function getIsoCountry(): string
	{
        return (string) $this->_call($this->isoCountry);
    }

    /**
     * SET ISO COUNTRY
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setIsoCountry($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->isoCountry, $datas, $type);
    }

    /**
     * GET PHONE
     *
     * @return string
     */
    public function getPhone(): string
	{
        return (string) $this->_call($this->phone);
    }

    /**
     * SET PHONE
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setPhone($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->phone, $datas, $type);
    }

    /**
     * GET MOBILE
     *
     * @return string
     */
    public function getMobile(): string
	{
        return (string) $this->_call($this->mobile);
    }

    /**
     * SET MOBILE
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setMobile($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->mobile, $datas, $type);
    }

    /**
     * GET FAX
     *
     * @return string
     */
    public function getFax(): string
	{
        return (string) $this->_call($this->fax);
    }

    /**
     * SET FAX
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setFax($datas, string $type = self::TYPE_AUTO): self
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
    public function setEmail($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->email, $datas, $type);
    }

###########################################################################################################
# COMPLETENESS CHECK

    /**
     * ISO-3166-1 alpha-2 codes for countries/territories that do not use postal codes.
     * Used to avoid requiring the ZIP field where it is not applicable.
     *
     * @var string[]
     */
    private const NO_ZIP_ISO_COUNTRIES = [
        'AO', 'AG', 'AW', 'BS', 'BZ', 'BJ', 'BW', 'BF', 'BI', 'CM', 'CF', 'KM', 'CG', 'CD', 'CK', 'CI', 'DJ', 'DM',
        'GQ', 'ER', 'FJ', 'GM', 'GH', 'GD', 'GY', 'HK', 'JM', 'KI', 'LY', 'MO', 'MW', 'ML', 'MR', 'NR', 'NU', 'QA',
        'RW', 'KN', 'LC', 'ST', 'SC', 'SL', 'SB', 'SO', 'SR', 'SY', 'TL', 'TG', 'TK', 'TO', 'TT', 'TV', 'UG', 'AE',
        'VU', 'YE', 'ZW',
    ];

    /**
     * IS COMPLETE
     *
     * An address is considered complete if it contains at least:
     *  - a recipient (surname + first name, or a company name if applicable)
     *  - an address line
     *  - a postal code
     *  - a city
     *  - a country (name or ISO code)
     *
     * @param bool $requirePhone [optional] useful if shipping
     * @return bool
     */
    public function isComplete(bool $requirePhone = false): bool
    {
        return [] === $this->getMissingFields($requirePhone);
    }

    /**
     * GET MISSING FIELDS
     *
     * List of missing fields preventing the address from being considered complete.
     *
     * @param bool $requirePhone [optional] useful if shipping
     * @return string[]
     */
    public function getMissingFields(bool $requirePhone = false): array
    {
        $missing = [];

        $hasFullName = '' !== trim($this->getFirstName()) && '' !== trim($this->getLastName());
        $hasCompany = '' !== trim($this->getCompany());
        if (!$hasFullName && !$hasCompany) {
            $missing[] = 'recipient';
        }

        if ('' === trim($this->getAddress())) {
            $missing[] = 'address';
        }

        $iso = strtoupper(trim($this->getIsoCountry()));
        $zipRequired = !in_array($iso, self::NO_ZIP_ISO_COUNTRIES, true);
        if ($zipRequired && '' === trim($this->getZip())) {
            $missing[] = 'zip';
        }

        if ('' === trim($this->getTown())) {
            $missing[] = 'town';
        }

        if ('' === trim($this->getCountry()) && '' === trim($this->getIsoCountry())) {
            $missing[] = 'country';
        }

        if ($requirePhone && '' === trim($this->getPhone()) && '' === trim($this->getMobile())) {
            $missing[] = 'phone';
        }

        return $missing;
    }
}
