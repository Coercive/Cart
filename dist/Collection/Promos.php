<?php
namespace Coercive\Shop\Cart\Collection;

use Coercive\Shop\Cart\Entity\Promo;
use Exception;
use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Promos extends Entity
{
    /** @var array Promo list */
    private $promos = [];

    /**
     * ADD PROMO
     *
     * @param Promo $promo
     * @param int|string $key [optional]
     * @param bool $overwrite [optional]
     * @return $this
     * @throws Exception
     */
    public function add(Promo $promo, $key = null, $overwrite = false): Promos
	{
        # Auto inc key
        if (null === $key) {
            $this->promos[] = $promo;
            return $this;
        }

        # Overwrite not allowed
        if (isset($this->promos[$key]) && !$overwrite) {
            throw new Exception("Key $key already in use.");
        }

        # Add with customer key
        $this->promos[$key] = $promo;

        # Maintain chainability
        return $this;
    }

    /**
     * DELETE PROMO
     *
     * @param int|string $key
     * @return $this
     * @throws Exception
     */
    public function delete($key): Promos
	{
        # Try delete
        if (isset($this->promos[$key])) {
            unset($this->promos[$key]);
        }
        else {
            throw new Exception("Invalid key $key.");
        }

        # Maintain chainability
        return $this;
    }

    /**
	 * DELETE ALL PROMOS
	 *
	 * @return $this
	 * @throws Exception
	 */
	public function clear(): Promos
	{
		# Reset empty array
		$this->promos = [];

		# Maintain chainability
		return $this;
	}

    /**
     * GET ITEM
     *
     * @param int|string $key
     * @return Promo
     * @throws Exception
     */
    public function get($key): Promo
	{
        # Load if exist
        if (isset($this->promos[$key])) {
            return $this->promos[$key];
        }
        else {
            throw new Exception("Invalid key $key.");
        }
    }

    /**
     * KEYS
     *
     * @return array
     */
    public function keys(): array
	{
        return array_keys($this->promos);
    }

    /**
     * LENGTH
     *
     * @return int
     */
    public function length(): int
	{
        return count($this->promos);
    }

    /**
     * KEY EXISTS
     *
     * @param int|string $key
     * @return bool
     */
    public function exists($key): bool
	{
        return array_key_exists($key, $this->promos);
    }
}