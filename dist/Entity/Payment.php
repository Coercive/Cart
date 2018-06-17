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
}