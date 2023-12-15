<?php
namespace Coercive\Shop\Cart\Entity;

use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Error extends Entity
{
###########################################################################################################
# PROPERTIES

    /** @var int|string|callable */
    private $ref = '';

    /** @var int|string|callable */
    private $code = '';

	/** @var string|callable */
	private $type = '';

	/** @var string|callable */
	private $subtype = '';

	/** @var string|callable */
	private $url = '';

	/** @var string|callable */
	private $slug = '';

	/** @var string|callable */
	private $name = '';

	/** @var string|callable */
	private $subname = '';

    /** @var string|callable */
    private $title = '';

	/** @var string|callable */
	private $subtitle = '';

	/** @var string|callable */
	private $resume = '';

	/** @var string|callable */
	private $description = '';

	/** @var string|callable */
	private $message = '';

	/** @var int|callable */
	private $duration = 0;

	/** @var string|callable */
	private $durationUnit = '';

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
    public function setRef($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->ref, $datas, $type);
    }

    /**
     * GET FROM
     *
     * @return int|string
     */
    public function getCode()
	{
        return $this->_call($this->code);
    }

    /**
     * SET FROM
     *
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setCode($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->code, $datas, $type);
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
	 * GET SUBTYPE
	 *
	 * @return int|string
	 */
	public function getSubtype()
	{
		return $this->_call($this->subtype);
	}

	/**
	 * SET SUBTYPE
	 *
	 * @param int|string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setSubtype($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->subtype, $datas, $type);
	}

	/**
	 * GET URL
	 *
	 * @return string
	 */
	public function getUrl(): string
	{
		return (string) $this->_call($this->url);
	}

	/**
	 * SET URL
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setUrl($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->url, $datas, $type);
	}

	/**
	 * GET SLUG
	 *
	 * @return string
	 */
	public function getSlug(): string
	{
		return (string) $this->_call($this->slug);
	}

	/**
	 * SET SLUG
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setSlug($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->slug, $datas, $type);
	}

	/**
	 * GET NAME
	 *
	 * @return string
	 */
	public function getName(): string
	{
		return (string) $this->_call($this->name);
	}

	/**
	 * SET NAME
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setName($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->name, $datas, $type);
	}

	/**
	 * GET SUBNAME
	 *
	 * @return string
	 */
	public function getSubName(): string
	{
		return (string) $this->_call($this->subname);
	}

	/**
	 * SET SUBNAME
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setSubName($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->subname, $datas, $type);
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
    public function setTitle($datas, string $type = self::TYPE_AUTO): self
	{
        return $this->_set($this->title, $datas, $type);
    }

	/**
	 * GET SUBTITLE
	 *
	 * @return string
	 */
	public function getSubTitle(): string
	{
		return (string) $this->_call($this->subtitle);
	}

	/**
	 * SET SUBTITLE
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setSubTitle($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->subtitle, $datas, $type);
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
	public function setResume($datas, string $type = self::TYPE_AUTO): self
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
	public function setDescription($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->description, $datas, $type);
	}

	/**
	 * GET MESSAGE
	 *
	 * @return string
	 */
	public function getMessage(): string
	{
		return (string) $this->_call($this->message);
	}

	/**
	 * SET MESSAGE
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setMessage($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->message, $datas, $type);
	}

	/**
	 * GET DURATION
	 *
	 * @return int
	 */
	public function getDuration(): int
	{
		return (int) $this->_call($this->duration);
	}

	/**
	 * SET DURATION
	 *
	 * @param int|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setDuration($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->duration, $datas, $type);
	}

	/**
	 * GET DURATION UNIT
	 *
	 * @return string
	 */
	public function getDurationUnit(): string
	{
		return (string) $this->_call($this->durationUnit);
	}

	/**
	 * SET DURATION UNIT
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setDurationUnit($datas, string $type = self::TYPE_AUTO): self
	{
		return $this->_set($this->durationUnit, $datas, $type);
	}
}
