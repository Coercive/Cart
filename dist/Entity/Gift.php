<?php
namespace Coercive\Shop\Cart\Entity;

use Coercive\Shop\Cart\Collection\Items;
use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Gift extends Entity
{
###########################################################################################################
# BIND ITEMS

	/** @var Items|null */
	private ? Items $items = null;

    /** @var User|null */
    private ? User $user = null;

	/**
	 * SINGLETON COLLECTION ITEMS
	 *
	 * @param Items|null $items [optional]
	 * @return Items
	 */
	public function Items(Items $items = null): Items
	{
		if($items) { return $this->items = $items; }
		return null === $this->items ? $this->items = new Items : $this->items;
	}

	/**
	 * SINGLETON USER
	 *
	 * @param User|null $user [optional]
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
