<?php
namespace Coercive\Shop\Cart\Collection;

use Exception;
use Coercive\Shop\Cart\Entity\Item;
use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Items extends Entity
{
    /** @var array Item list */
    private $items = [];

    /**
     * ADD ITEM
     *
     * @param Item $item
     * @param int|string $key [optional]
     * @param bool $overwrite [optional]
     * @return $this
     * @throws Exception
     */
    public function add(Item $item, $key = null, $overwrite = false): Items
	{
        # Auto inc key
        if (null === $key) {
            $this->items[] = $item;
            return $this;
        }

        # Overwrite not allowed
        if (isset($this->items[$key]) && !$overwrite) {
            throw new Exception("Key $key already in use.");
        }

        # Add with customer key
        $this->items[$key] = $item;

        # Maintain chainability
        return $this;
    }

    /**
     * DELETE ITEM
     *
     * @param int|string $key
     * @return $this
     * @throws Exception
     */
    public function delete($key): Items
	{
        # Try delete
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
        }
        else {
            throw new Exception("Invalid key $key.");
        }

        # Maintain chainability
        return $this;
    }

    /**
	 * DELETE ALL ITEMS
	 *
	 * @return $this
	 * @throws Exception
	 */
	public function clear(): Items
	{
		# Reset empty array
		$this->items = [];

		# Maintain chainability
		return $this;
	}

    /**
     * GET ITEM
     *
     * @param int|string $key
     * @return Item
     * @throws Exception
     */
    public function get($key): Item
	{
        # Load if exist
        if (isset($this->items[$key])) {
            return $this->items[$key];
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
        return array_keys($this->items);
    }

    /**
     * LENGTH
     *
     * @return int
     */
    public function length(): int
	{
        return count($this->items);
    }

    /**
     * KEY EXISTS
     *
     * @param int|string $key
     * @return bool
     */
    public function exists($key): bool
	{
        return array_key_exists($key, $this->items);
    }
}