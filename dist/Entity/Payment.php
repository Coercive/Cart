<?php
namespace Coercive\Shop\Cart\Entity;

use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Payment extends Entity
{
###########################################################################################################
# PROPERTIES

    /** @var int|string|callable */
    private $ref = '';

    /** @var int|string|callable */
    private $token = '';

    /** @var string|callable */
    private $title = '';

    /** @var string|callable */
    private $resume = '';

    /** @var string|callable */
    private $description = '';

    /** @var int|string|callable */
    private $allowedModes = '';

    /** @var int|string|callable */
    private $mode = '';

    /** @var int|string|callable */
    private $allowedTypes = '';

    /** @var int|string|callable */
    private $type = '';

    /** @var int|string|callable */
    private $currency = '';

    /** @var float|callable */
    private $rate = 0;

###########################################################################################################
# BANK PROPERTIES

	/** @var string|callable */
	private $iban = '';

	/** @var string|callable */
	private $bic = '';

	/** @var string|callable */
	private $account = '';

	/** @var string|callable */
	private $bank = '';

	/** @var string|callable */
	private $branch = '';

	/** @var string|callable */
	private $address = '';

	/** @var string|callable */
	private $zip = '';

	/** @var string|callable */
	private $city = '';

	/** @var string|callable */
	private $country = '';

	/** @var string|callable */
	private $isoCountry = '';

	/** @var string|callable */
	private $state = '';

	/** @var string|callable */
	private $email = '';

	/** @var string|callable */
	private $fax = '';

	/** @var string|callable */
	private $phone = '';

	/** @var string|callable */
	private $mobile = '';

	/** @var string|callable */
	private $website = '';

	/** @var bool|callable */
	private $status = false;

###########################################################################################################
# ACCESSORS

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
    public function setRef($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->ref, $datas, $type);
    }

    /**
     * GET TOKEN
     *
     * @return int|string
     */
    public function getToken()
	{
        return $this->_call($this->token);
    }

    /**
     * SET TOKEN
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setToken($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->token, $datas, $type);
    }

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
    public function setTitle($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->title, $datas, $type);
    }

    /**
     * GET RESUME
     *
     * @return string
     */
    public function getResume(): string
	{
        return (string) $this->_call($this->resume);
    }

    /**
     * SET RESUME
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setResume($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->resume, $datas, $type);
    }

    /**
     * GET DESCRIPTION
     *
     * @return string
     */
    public function getDescription(): string
	{
        return (string) $this->_call($this->description);
    }

    /**
     * SET DESCRIPTION
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setDescription($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->description, $datas, $type);
    }

    /**
     * GET ALLOWED MODES
     *
     * @return int|string
     */
    public function getAllowedModes()
	{
        return $this->_call($this->allowedModes);
    }

    /**
     * SET ALLOWED MODES
     *
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setAllowedModes($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->allowedModes, $datas, $type);
    }

    /**
     * GET MODE
     *
     * @return int|string
     */
    public function getMode()
	{
        return $this->_call($this->mode);
    }

    /**
     * SET MODE
     *
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setMode($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->mode, $datas, $type);
    }

    /**
     * GET ALLOWED TYPES
     *
     * @return int|string
     */
    public function getAllowedTypes()
	{
        return $this->_call($this->allowedTypes);
    }

    /**
     * SET ALLOWED TYPES
     *
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setAllowedTypes($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->allowedTypes, $datas, $type);
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
    public function setType($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->type, $datas, $type);
    }

    /**
     * GET CURRENCY
     *
     * @return int|string
     */
    public function getCurrency()
	{
        return $this->_call($this->currency);
    }

    /**
     * SET CURRENCY
     *
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setCurrency($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->currency, $datas, $type);
    }

    /**
     * GET RATE
     *
     * @return float
     */
    public function getRate(): float
	{
        return (float) $this->_call($this->rate);
    }

    /**
     * SET RATE
     *
     * @param float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setRate($datas, string $type = self::TYPE_AUTO): Payment
	{
        return $this->_set($this->rate, $datas, $type);
    }

	/**
	 * GET IBAN
	 *
	 * @return string
	 */
	public function getIban(): string
	{
		return (string) $this->_call($this->iban);
	}

	/**
	 * SET IBAN
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setIban($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->iban, $datas, $type);
	}

	/**
	 * GET BIC
	 *
	 * @return string
	 */
	public function getBic(): string
	{
		return (string) $this->_call($this->bic);
	}

	/**
	 * SET BIC
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setBic($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->bic, $datas, $type);
	}

	/**
	 * GET ACCOUNT
	 *
	 * @return string
	 */
	public function getAccount(): string
	{
		return (string) $this->_call($this->account);
	}

	/**
	 * SET ACCOUNT
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setAccount($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->account, $datas, $type);
	}

	/**
	 * GET BANK
	 *
	 * @return string
	 */
	public function getBank(): string
	{
		return (string) $this->_call($this->bank);
	}

	/**
	 * SET BANK
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setBank($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->bank, $datas, $type);
	}

	/**
	 * GET BRANCH
	 *
	 * @return string
	 */
	public function getBranch(): string
	{
		return (string) $this->_call($this->branch);
	}

	/**
	 * SET BRANCH
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setBranch($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->branch, $datas, $type);
	}

	/**
	 * GET ADDRESS
	 *
	 * @return string
	 */
	public function getAddress(): string
	{
		return (string) $this->_call($this->address);
	}

	/**
	 * SET ADDRESS
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setAddress($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->address, $datas, $type);
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
	public function setZip($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->zip, $datas, $type);
	}

	/**
	 * GET CITY
	 *
	 * @return string
	 */
	public function getCity(): string
	{
		return (string) $this->_call($this->city);
	}

	/**
	 * SET CITY
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setCity($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->city, $datas, $type);
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
	public function setCountry($datas, string $type = self::TYPE_AUTO): Payment
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
	public function setIsoCountry($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->isoCountry, $datas, $type);
	}

	/**
	 * GET STATE
	 *
	 * @return string
	 */
	public function getState(): string
	{
		return (string) $this->_call($this->state);
	}

	/**
	 * SET STATE
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setState($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->state, $datas, $type);
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
	public function setPhone($datas, string $type = self::TYPE_AUTO): Payment
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
		return (string)  $this->_call($this->mobile);
	}

	/**
	 * SET MOBILE
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setMobile($datas, string $type = self::TYPE_AUTO): Payment
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
	public function setFax($datas, string $type = self::TYPE_AUTO): Payment
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
	public function setEmail($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->email, $datas, $type);
	}

	/**
	 * GET WEB SITE
	 *
	 * @return string
	 */
	public function getWebSite(): string
	{
		return (string) $this->_call($this->website);
	}

	/**
	 * SET WEB SITE
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setWebSite($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->website, $datas, $type);
	}

	/**
	 * GET STATUS
	 *
	 * @return bool
	 */
	public function getStatus(): bool
	{
		return (bool) $this->_call($this->status);
	}

	/**
	 * SET STATUS
	 *
	 * @param bool|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setStatus($datas, string $type = self::TYPE_AUTO): Payment
	{
		return $this->_set($this->status, $datas, $type);
	}
}
