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

    /** @var Payment */
    private $_oPayment = null;

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

    /**
     * SINGLETON PAYMENT
     *
     * @return Payment
     */
    public function Payment() {
        return null === $this->_oPayment ? $this->_oPayment = new Payment : $this->_oPayment;
    }

###########################################################################################################
# PROPERTIES

	/** @var string|callable */
	private $_sTitle = '';

	/** @var int|string|callable */
	private $_mRef = '';

	/** @var float|callable */
	private $_fAmount = 0;
    
    /** @var float|callable */
	private $_fShippingAmount = 0;
    
    /** @var float|callable */
	private $_fFullAmount = 0;

	/** @var float|callable */
	private $_fAmountExcludingTaxes = 0;

	/** @var float|callable */
	private $_fAmountIncludingTaxes = 0;

	/** @var float|callable */
	private $_fAmountVat = 0;

	/** @var int|callable */
	private $_iQuantity = 0;

###########################################################################################################
# ACCESSORS

	/**
	 * GET TITLE
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->_call($this->_sTitle);
	}

	/**
	 * SET TITLE
	 *
	 * @param string|callable $sTitle
	 * @return $this
	 */
	public function setTitle($sTitle) {
		return $this->_set($this->_sTitle, $sTitle);
	}

	/**
	 * GET REF
	 *
	 * @return int|string
	 */
	public function getRef() {
		return $this->_call($this->_mRef);
	}

	/**
	 * SET REF
	 *
	 * @param int|string|callable $mRef
	 * @return $this
	 */
	public function setRef($mRef) {
		return $this->_set($this->_mRef, $mRef);
	}

	/**
	 * GET AMOUNT
	 *
	 * @return float
	 */
	public function getAmount() {
		return $this->_call($this->_fAmount);
	}

	/**
	 * SET AMOUNT
	 *
	 * @param float|callable $fAmount
	 * @return $this
	 */
	public function setAmount($fAmount) {
		return $this->_set($this->_fAmount, $fAmount);
	}

    /**
	 * GET SHIPPING AMOUNT
	 *
	 * @return float
	 */
	public function getShippingAmount() {
		return $this->_call($this->_fShippingAmount);
	}

	/**
	 * SET SHIPPING AMOUNT
	 *
	 * @param float|callable $fShippingAmount
	 * @return $this
	 */
	public function setShippingAmount($fShippingAmount) {
		return $this->_set($this->_fShippingAmount, $fShippingAmount);
	}
    
    /**
	 * GET FULL AMOUNT
	 *
	 * @return float
	 */
	public function getFullAmount() {
		return $this->_call($this->_fFullAmount);
	}

	/**
	 * SET FULL AMOUNT
	 *
	 * @param float|callable $fFullAmount
	 * @return $this
	 */
	public function setFullAmount($fFullAmount) {
		return $this->_set($this->_fFullAmount, $fFullAmount);
	}

	/**
	 * GET AMOUNT EXCLUDING TAXES
	 *
	 * @return float
	 */
	public function getAmountExcludingTaxes() {
		return $this->_call($this->_fAmountExcludingTaxes);
	}

	/**
	 * SET AMOUNT EXCLUDING TAXES
	 *
	 * @param float|callable $fAmountExcludingTaxes
	 * @return $this
	 */
	public function setAmountExcludingTaxes($fAmountExcludingTaxes) {
		return $this->_set($this->_fAmountExcludingTaxes, $fAmountExcludingTaxes);
	}

	/**
	 * GET AMOUNT INCLUDING TAXES
	 *
	 * @return float
	 */
	public function getAmountIncludingTaxes() {
		return $this->_call($this->_fAmountIncludingTaxes);
	}

	/**
	 * SET AMOUNT INCLUDING TAXES
	 *
	 * @param float|callable $fAmountIncludingTaxes
	 * @return $this
	 */
	public function setPriceIncludingTaxes($fAmountIncludingTaxes) {
		return $this->_set($this->_fAmountIncludingTaxes, $fAmountIncludingTaxes);
	}

	/**
	 * GET AMOUNT VAT
	 *
	 * @return float
	 */
	public function getAmountVat() {
		return $this->_call($this->_fAmountVat);
	}

	/**
	 * SET AMOUNT VAT
	 *
	 * @param float|callable $fAmountVat
	 * @return $this
	 */
	public function setAmountVat($fAmountVat) {
		return $this->_set($this->_fAmountVat, $fAmountVat);
	}

	/**
	 * GET QUANTITY
	 *
	 * @return int
	 */
	public function getQuantity() {
		return $this->_call($this->_iQuantity);
	}

	/**
	 * SET QUANTITY
	 *
	 * @param int|callable $iQuantity
	 * @return $this
	 */
	public function setQuantity($iQuantity) {
		return $this->_set($this->_iQuantity, $iQuantity);
	}

}
