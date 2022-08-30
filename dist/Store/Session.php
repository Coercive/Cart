<?php
namespace Coercive\Shop\Cart\Store;

use Exception;
use Coercive\Shop\Cart\Cart;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Session
{
    const SESSION_CART = 'Coercive_Cart';

    /** @var string */
    private $name;

    /**
     * Session constructor.
     *
	 * @param string $name [optional]
	 * @return void
     * @throws Exception
     */
    public function __construct(string $name = self::SESSION_CART)
	{
        # Session alert
        if(session_status() !== PHP_SESSION_ACTIVE || session_id() === '') {
            throw new Exception("You have to create session before use store options");
        }

        # Session name
		$this->name = $name;
    }

    /**
     * STORE CART IN SESSION
     *
     * @param Cart $cart
     * @return $this
     */
    public function store(Cart $cart): Session
	{
        $_SESSION[$this->name] = serialize($cart);
        return $this;
    }

    /**
     * RETRIEVE CART FROM SESSION
     *
     * @return Cart
     */
    public function retrieve(): Cart
	{
        return empty($_SESSION[$this->name]) ? new Cart : unserialize($_SESSION[$this->name]);
    }

    /**
     * DELETE CART SESSION
     *
	 * @return $this
     */
    public function delete(): Session
	{
        $_SESSION[$this->name] = null;
        return $this;
    }

    /**
     * EXIST CART IN SESSION
     *
	 * @param bool $instanceOf [optional]
     * @return bool
     */
    public function exist(bool $instanceOf = false): bool
	{
		if(empty($_SESSION[$this->name])) {
			return false;
		}
		if($instanceOf) {
			return unserialize($_SESSION[$this->name]) instanceof Cart;
		}
        return true;
    }
}