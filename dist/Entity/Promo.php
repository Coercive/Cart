<?php
namespace Coercive\Shop\Cart\Entity;

use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Promo extends Entity
{
###########################################################################################################
# PROCESS

    /**
     * CALC
     *
     * @param float $price
     * @return float
     */
    public function calc(float $price): float
	{
        # PRICE CUT
        if($cut = $this->getPriceCut()) {
            return $price - $cut;
        }

        # PERCENT
        if($percent = $this->getPercent()) {
            return $price - $price * $percent;
        }

        # INACTIVE
        return 0.0;
    }

###########################################################################################################
# PROPERTIES

    /** @var int|string|callable */
    private $ref = '';

    /** @var int|string|callable */
    private $token = '';

	/** @var int|string|callable */
	private $type = '';

    /** @var string|callable */
    private $title = '';

    /** @var string|callable */
    private $resume = '';

    /** @var string|callable */
    private $description = '';

    /** @var int|float|callable */
    private $percent = 0;

    /** @var int|float|callable */
    private $priceCut = 0;

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
    public function setRef($datas, string $type = self::TYPE_AUTO): Promo
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setToken($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->token, $datas, $type);
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
	public function setType($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->type, $datas, $type);
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
    public function setTitle($datas, string $type = self::TYPE_AUTO): Promo
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
    public function setResume($datas, string $type = self::TYPE_AUTO): Promo
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
    public function setDescription($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->description, $datas, $type);
    }

    /**
     * GET PERCENT
     *
     * @return int|float
     */
    public function getPercent()
	{
        return $this->_call($this->percent);
    }

    /**
     * SET PERCENT
     *
     * @param int|float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setPercent($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->percent, $datas, $type);
    }

    /**
     * GET PRICE CUT
     *
     * @return int|float
     */
    public function getPriceCut()
	{
        return $this->_call($this->priceCut);
    }

    /**
     * SET PRICE CUT
     *
     * @param int|float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setPriceCut($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->priceCut, $datas, $type);
    }
}
