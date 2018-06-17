<?php
namespace Coercive\Shop\Cart\Entity;

use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Gift extends Entity
{
###########################################################################################################
# BIND ITEMS

    /** @var User */
    private $user = null;

    /**
     * SINGLETON USER
     *
     * @param User $user [optional]
     * @return User
     */
    public function User(User $user = null): User
	{
    	if($user) { return $this->user = $user; }
        return null === $this->user ? $this->user = new User : $this->user;
    }

###########################################################################################################
# PROPERTIES

    /** @var int|string|callable */
    private $ref = '';

    /** @var int|string|callable */
    private $from = '';

    /** @var string|callable */
    private $message = '';

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
    public function setRef($ref)
	{
        return $this->_set($this->ref, $ref);
    }

    /**
     * GET FROM
     *
     * @return int|string
     */
    public function getFrom()
	{
        return $this->_call($this->from);
    }

    /**
     * SET FROM
     *
     * @param int|string|callable $from
     * @return $this
     */
    public function setFrom($from)
	{
        return $this->_set($this->from, $from);
    }

    /**
     * GET MESSAGE
     *
     * @return string
     */
    public function getMessage(): string
	{
        return $this->_call($this->message);
    }

    /**
     * SET MESSAGE
     *
     * @param string|callable $message
     * @return $this
     */
    public function setMessage($message)
	{
        return $this->_set($this->message, $message);
    }
}