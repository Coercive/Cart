<?php
namespace Coercive\Shop\Cart;

use Coercive\Shop\Cart\Ext\Collection;
use Coercive\Shop\Cart\Ext\Entity;

/**
 * Class Cart
 * PHP Version 	7
 *
 * @package		Coercive\Shop\Cart
 * @link		@link https://github.com/Coercive/Cart
 *
 * @author  	Anthony Moral <contact@coercive.fr>
 * @copyright   (c) 2017 - 2018 Anthony Moral
 * @license 	http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
class Cart extends Entity {

###########################################################################################################
# BIND ITEMS

    /** @var User */
    private $_oUser = null;

    /** @var Collection */
    private $_oCollection = null;

    /** @var Shipping */
    private $_oShipping = null;

    /** @var Billing */
    private $_oBilling = null;

    /** @var Gift */
    private $_oGift = null;

    /** @var Promo */
    private $_oPromo = null;

    /**
     * SINGLETON USER
     *
     * @return User
     */
    public function User() {
        return null === $this->_oUser ? $this->_oUser = new User : $this->_oUser;
    }

    /**
     * SINGLETON COLLECTION
     *
     * @return Collection
     */
    public function Items() {
        return null === $this->_oCollection ? $this->_oCollection = new Collection : $this->_oCollection;
    }

    /**
     * SINGLETON SHIPPING
     *
     * @return Shipping
     */
    public function Shipping() {
        return null === $this->_oShipping ? $this->_oShipping = new Shipping : $this->_oShipping;
    }

    /**
     * SINGLETON BILLING
     *
     * @return Billing
     */
    public function Billing() {
        return null === $this->_oBilling ? $this->_oBilling = new Billing : $this->_oBilling;
    }

    /**
     * SINGLETON GIFT
     *
     * @return Gift
     */
    public function Gift() {
        return null === $this->_oGift ? $this->_oGift = new Gift : $this->_oGift;
    }

    /**
     * SINGLETON PROMO
     *
     * @return Promo
     */
    public function Promo() {
        return null === $this->_oPromo ? $this->_oPromo = new Promo : $this->_oPromo;
    }

}