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
     * @param int|string|callable $ref
     * @return $this
     */
    public function setRef($ref): Promo
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
     * @param int|string|callable $token
     * @return $this
     */
    public function setToken($token): Promo
	{
        return $this->_set($this->token, $token);
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
	public function setType($type): Promo
	{
		return $this->_set($this->type, $type);
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
    public function setTitle($title): Promo
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
    public function setResume($resume): Promo
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
    public function setDescription($description): Promo
	{
        return $this->_set($this->description, $description);
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
     * @param int|float|callable $percent
     * @return $this
     */
    public function setPercent($percent): Promo
	{
        return $this->_set($this->percent, $percent);
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
     * @param int|float|callable $priceCut
     * @return $this
     */
    public function setPriceCut($priceCut): Promo
	{
        return $this->_set($this->priceCut, $priceCut);
    }
}