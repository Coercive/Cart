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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setRef($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->ref, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setFrom($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->from, $datas, $type);
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
    public function setMessage($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->message, $datas, $type);
    }
}
