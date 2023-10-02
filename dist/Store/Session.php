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
	private string $name;

	/**
	 * @param Cart $cart
	 * @return string
	 */
	private function serialize(Cart $cart): string
	{
		return serialize($cart);
	}

	/**
	 * @param string $serialized
	 * @return Cart|null
	 */
	private function unserialize(string $serialized): ? Cart
	{
		if(!$serialized) {
			return null;
		}
		$cart = unserialize($serialized, ['allowed_classes' => [Cart::class]]);
		return $cart instanceof Cart ? $cart : null;
	}

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
		$_SESSION[$this->name] = $this->serialize($cart);
		return $this;
	}

	/**
	 * RETRIEVE CART FROM SESSION
	 *
	 * @return Cart
	 */
	public function retrieve(): Cart
	{
		return $this->unserialize($_SESSION[$this->name] ?? '') ?: new Cart;
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
			return !!$this->unserialize($_SESSION[$this->name] ?? '');
		}
		return true;
	}

	/**
	 * Export current stored cart to string
	 *
	 * @param Cart|null $cart [optional]
	 * @return string
	 */
	public function export(Cart $cart = null): string
	{
		if($cart) {
			$this->store($cart);
		}
		return $_SESSION[$this->name] ?? '';
	}

	/**
	 * Import serialized cart into current session
	 *
	 * @param string $serialized
	 * @return Cart|null
	 */
	public function import(string $serialized): ? Cart
	{
		return $_SESSION[$this->name] = $this->unserialize($serialized);
	}
}