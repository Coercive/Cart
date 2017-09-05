<?php
namespace Coercive\Shop\Cart\Store;

use Exception;
use Coercive\Shop\Cart\Cart;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Session {

    const SESSION_CART = 'Coercive_Cart';

    /**
     * Session constructor.
     *
     * @throws Exception
     */
    public function __construct() {

        # Session alert
        if(session_status() !== PHP_SESSION_ACTIVE || session_id() === '') {
            throw new Exception("You have to create session before use store options");
        }

    }

    /**
     * STORE CART IN SESSION
     *
     * @param Cart $oObject
     * @param string $sName [optional]
     * @return $this
     */
    public function store(Cart $oObject, $sName = self::SESSION_CART) {
        $_SESSION[$sName] = serialize($oObject);
        return $this;
    }

    /**
     * RETRIEVE CART FROM SESSION
     *
     * @param string $sName [optional]
     * @return Cart
     */
    public function retrieve($sName = self::SESSION_CART) {
        return empty($_SESSION[$sName]) ? new Cart : unserialize($_SESSION[$sName]);
    }

    /**
	 * DELETE CART SESSION
	 *
	 * @param string $sName [optional]
	 * @return $this
	 */
	public function delete($sName = self::SESSION_CART) {
		$_SESSION[$sName] = null;
		return $this;
	}

}
