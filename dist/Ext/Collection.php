<?php
namespace Coercive\Shop\Cart\Ext;

use Exception;
use Coercive\Shop\Cart\Item;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Collection extends Entity {

    /** @var array Item list */
    private $_aItems = [];

    /**
     * ADD ITEM
     *
     * @param Item $oItem
     * @param int|string $mKey [optional]
     * @param bool $bOverwrite [optional]
     * @return $this
     * @throws Exception
     */
    public function addItem(Item $oItem, $mKey = null, $bOverwrite = false) {

        # Auto inc key
        if (null === $mKey) {
            $this->_aItems[] = $oItem;
            return $this;
        }

        # Overwrite not allowed
        if (isset($this->_aItems[$mKey]) && !$bOverwrite) {
            throw new Exception("Key $mKey already in use.");
        }

        # Add with customer key
        $this->_aItems[$mKey] = $oItem;

        # Maintain chainability
        return $this;

    }

    /**
     * DELETE ITEM
     *
     * @param int|string $mKey
     * @return $this
     * @throws Exception
     */
    public function deleteItem($mKey) {

        # Try delete
        if (isset($this->_aItems[$mKey])) {
            unset($this->_aItems[$mKey]);
        }
        else {
            throw new Exception("Invalid key $mKey.");
        }

        # Maintain chainability
        return $this;

    }

    /**
     * GET ITEM
     *
     * @param int|string $mKey
     * @return Item
     * @throws Exception
     */
    public function getItem($mKey) {

        # Load if exist
        if (isset($this->_aItems[$mKey])) {
            return $this->_aItems[$mKey];
        }
        else {
            throw new Exception("Invalid key $mKey.");
        }

    }

    /**
     * KEYS
     *
     * @return array
     */
    public function keys() {
        return array_keys($this->_aItems);
    }

    /**
     * LENGTH
     *
     * @return int
     */
    public function length() {
        return count($this->_aItems);
    }

    /**
     * KEY EXISTS
     *
     * @param int|string $mKey
     * @return bool
     */
    public function keyExists($mKey) {
        return isset($this->_aItems[$mKey]);
    }

}