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
    private $mode = '';

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
     * @param int|string|callable $ref
     * @return $this
     */
    public function setRef($ref): Payment
	{
        return $this->_set($this->ref, $ref);
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
     * @param string|callable $token
     * @return $this
     */
    public function setToken($token): Payment
	{
        return $this->_set($this->token, $token);
    }

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
    public function setTitle($title): Payment
	{
        return $this->_set($this->title, $title);
    }

    /**
     * GET RESUME
     *
     * @return string
     */
    public function getResume(): string
	{
        return $this->_call($this->resume);
    }

    /**
     * SET RESUME
     *
     * @param string|callable $resume
     * @return $this
     */
    public function setResume($resume): Payment
	{
        return $this->_set($this->resume, $resume);
    }

    /**
     * GET DESCRIPTION
     *
     * @return string
     */
    public function getDescription(): string
	{
        return $this->_call($this->description);
    }

    /**
     * SET DESCRIPTION
     *
     * @param string|callable $description
     * @return $this
     */
    public function setDescription($description): Payment
	{
        return $this->_set($this->description, $description);
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
     * @param int|string|callable $mode
     * @return $this
     */
    public function setMode($mode): Payment
	{
        return $this->_set($this->mode, $mode);
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
    public function setType($type): Payment
	{
        return $this->_set($this->type, $type);
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
     * @param string|callable $currency
     * @return $this
     */
    public function setCurrency($currency): Payment
	{
        return $this->_set($this->currency, $currency);
    }

    /**
     * GET RATE
     *
     * @return float
     */
    public function getRate(): float
	{
        return $this->_call($this->rate);
    }

    /**
     * SET RATE
     *
     * @param float|callable $rate
     * @return $this
     */
    public function setRate($rate): Payment
	{
        return $this->_set($this->rate, $rate);
    }

	/**
	 * GET IBAN
	 *
	 * @return string
	 */
	public function getIban(): string
	{
		return $this->_call($this->iban);
	}

	/**
	 * SET IBAN
	 *
	 * @param string|callable $iban
	 * @return $this
	 */
	public function setIban($iban): Payment
	{
		return $this->_set($this->iban, $iban);
	}

	/**
	 * GET BIC
	 *
	 * @return string
	 */
	public function getBic(): string
	{
		return $this->_call($this->iban);
	}

	/**
	 * SET BIC
	 *
	 * @param string|callable $bic
	 * @return $this
	 */
	public function setBic($bic): Payment
	{
		return $this->_set($this->bic, $bic);
	}

	/**
	 * GET ACCOUNT
	 *
	 * @return string
	 */
	public function getAccount(): string
	{
		return $this->_call($this->account);
	}

	/**
	 * SET ACCOUNT
	 *
	 * @param string|callable $account
	 * @return $this
	 */
	public function setAccount($account): Payment
	{
		return $this->_set($this->account, $account);
	}

	/**
	 * GET BANK
	 *
	 * @return string
	 */
	public function getBank(): string
	{
		return $this->_call($this->bank);
	}

	/**
	 * SET BANK
	 *
	 * @param string|callable $bank
	 * @return $this
	 */
	public function setBank($bank): Payment
	{
		return $this->_set($this->bank, $bank);
	}

	/**
	 * GET BRANCH
	 *
	 * @return string
	 */
	public function getBranch(): string
	{
		return $this->_call($this->branch);
	}

	/**
	 * SET BRANCH
	 *
	 * @param string|callable $branch
	 * @return $this
	 */
	public function setBranch($branch): Payment
	{
		return $this->_set($this->branch, $branch);
	}

	/**
	 * GET ADDRESS
	 *
	 * @return string
	 */
	public function getAddress(): string
	{
		return $this->_call($this->address);
	}

	/**
	 * SET ADDRESS
	 *
	 * @param string|callable $address
	 * @return $this
	 */
	public function setAddress($address): Payment
	{
		return $this->_set($this->address, $address);
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
	public function setZip($zip): Payment
	{
		return $this->_set($this->zip, $zip);
	}

	/**
	 * GET CITY
	 *
	 * @return string
	 */
	public function getCity(): string
	{
		return $this->_call($this->city);
	}

	/**
	 * SET CITY
	 *
	 * @param string|callable $city
	 * @return $this
	 */
	public function setCity($city): Payment
	{
		return $this->_set($this->city, $city);
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
	public function setCountry($country): Payment
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
	public function setIsoCountry($isoCountry): Payment
	{
		return $this->_set($this->isoCountry, $isoCountry);
	}

	/**
	 * GET STATE
	 *
	 * @return string
	 */
	public function getState(): string
	{
		return $this->_call($this->state);
	}

	/**
	 * SET STATE
	 *
	 * @param string|callable $state
	 * @return $this
	 */
	public function setState($state): Payment
	{
		return $this->_set($this->state, $state);
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
	public function setPhone($phone): Payment
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
	public function setMobile($mobile): Payment
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
	public function setFax($fax): Payment
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
	public function setEmail($email): Payment
	{
		return $this->_set($this->email, $email);
	}

	/**
	 * GET WEB SITE
	 *
	 * @return string
	 */
	public function getWebSite(): string
	{
		return $this->_call($this->website);
	}

	/**
	 * SET WEB SITE
	 *
	 * @param string|callable $website
	 * @return $this
	 */
	public function setWebSite($website): Payment
	{
		return $this->_set($this->website, $website);
	}

	/**
	 * GET STATUS
	 *
	 * @return bool
	 */
	public function getStatus(): bool
	{
		return $this->_call($this->status);
	}

	/**
	 * SET STATUS
	 *
	 * @param bool|callable $status
	 * @return $this
	 */
	public function setStatus($status): Payment
	{
		return $this->_set($this->status, $status);
	}
}
