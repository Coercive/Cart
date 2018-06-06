<?php
namespace Coercive\Shop\Cart;

use Coercive\Shop\Cart\Ext\Collection;
use Coercive\Shop\Cart\Ext\Address;
use Coercive\Shop\Cart\Ext\Entity;

/**
 * Class Cart
 *
 * @package		Coercive\Shop\Cart
 * @link		@link https://github.com/Coercive/Cart
 *
 * @author  	Anthony Moral <contact@coercive.fr>
 * @copyright   (c) 2018 Anthony Moral
 * @license 	http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
class Cart extends Entity
{
###########################################################################################################
# BIND ITEMS

    /** @var User */
    private $user = null;

    /** @var Collection */
    private $collection = null;

    /** @var Shipping */
    private $shipping = null;

    /** @var Billing */
    private $billing = null;

    /** @var Gift */
    private $gift = null;

    /** @var Promo */
    private $promo = null;

    /** @var Payment */
    private $payment = null;

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

    /**
     * SINGLETON COLLECTION
     *
     * @param Collection $collection [optional]
     * @return Collection
     */
    public function Items(Collection $collection = null): Collection
	{
	    if($collection) { return $this->user = $collection; }
        return null === $this->collection ? $this->collection = new Collection : $this->collection;
    }

    /**
     * SINGLETON SHIPPING
     *
     * @param Address $shipping [optional]
     * @return Address|Shipping
     */
    public function Shipping(Address $shipping = null): Address
	{
	    if($shipping) { return $this->shipping = $shipping; }
        return null === $this->shipping ? $this->shipping = new Shipping : $this->shipping;
    }

    /**
     * SINGLETON BILLING
     *
     * @param Address $billing [optional]
     * @return Address|Billing
     */
    public function Billing(Address $billing = null): Address
	{
	    if($billing) { return $this->billing = $billing; }
        return null === $this->billing ? $this->billing = new Billing : $this->billing;
    }

    /**
     * SINGLETON GIFT
     *
     * @param Gift $gift [optional]
     * @return Gift
     */
    public function Gift(Gift $gift = null): Gift
	{
	    if($gift) { return $this->gift = $gift; }
        return null === $this->gift ? $this->gift = new Gift : $this->gift;
    }

    /**
     * SINGLETON PROMO
     *
     * @param Promo $promo [optional]
     * @return Promo
     */
    public function Promo(Promo $promo = null): Promo
	{
	    if($promo) { return $this->promo = $promo; }
        return null === $this->promo ? $this->promo = new Promo : $this->promo;
    }

    /**
     * SINGLETON PAYMENT
     *
     * @param Payment $payment [optional]
     * @return Payment
     */
    public function Payment(Payment $payment = null): Payment
	{
	    if($payment) { return $this->payment = $payment; }
        return null === $this->payment ? $this->payment = new Payment : $this->payment;
    }

###########################################################################################################
# PROPERTIES

	/** @var string|callable */
	private $title = '';

	/** @var int|string|callable */
	private $ref = '';

	/** @var float|callable */
	private $amount = 0;
    
    /** @var float|callable */
	private $shippingAmount = 0;
    
    /** @var float|callable */
	private $fullAmount = 0;

	/** @var float|callable */
	private $amountExcludingTaxes = 0;

	/** @var float|callable */
	private $amountIncludingTaxes = 0;

	/** @var float|callable */
	private $amountVat = 0;

	/** @var int|callable */
	private $quantity = 0;

	/** @var float|callable */
	private $shippingUnitCost = 0;

	/** @var string|callable */
	private $shippingGeoArea = '';

	/** @var string|callable */
	private $shippingZone = '';

	/** @var string|callable */
	private $shippingRef = '';

    /** @var bool|callable */
	private $termsOfSales = false;

	/** @var bool|callable */
	private $termsOfUse = false;

###########################################################################################################
# ACCESSORS

	/**
	 * GET TITLE
	 *
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->_call($this->title);
	}

	/**
	 * SET TITLE
	 *
	 * @param string|callable $title
	 * @return $this
	 */
	public function setTitle($title): Cart
	{
		return $this->_set($this->title, $title);
	}

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
	 * @param int|string|callable $ref
	 * @return $this
	 */
	public function setRef($ref): Cart
	{
		return $this->_set($this->ref, $ref);
	}

	/**
	 * GET AMOUNT
	 *
	 * @return float
	 */
	public function getAmount(): float
	{
		return $this->_call($this->amount);
	}

	/**
	 * SET AMOUNT
	 *
	 * @param float|callable $amount
	 * @return $this
	 */
	public function setAmount($amount): Cart
	{
		return $this->_set($this->amount, $amount);
	}

    /**
	 * GET SHIPPING AMOUNT
	 *
	 * @return float
	 */
	public function getShippingAmount(): float
	{
		return $this->_call($this->shippingAmount);
	}

	/**
	 * SET SHIPPING AMOUNT
	 *
	 * @param float|callable $shippingAmount
	 * @return $this
	 */
	public function setShippingAmount($shippingAmount): Cart
	{
		return $this->_set($this->shippingAmount, $shippingAmount);
	}
    
    /**
	 * GET FULL AMOUNT
	 *
	 * @return float
	 */
	public function getFullAmount(): float
	{
		return $this->_call($this->fullAmount);
	}

	/**
	 * SET FULL AMOUNT
	 *
	 * @param float|callable $fullAmount
	 * @return $this
	 */
	public function setFullAmount($fullAmount): Cart
	{
		return $this->_set($this->fullAmount, $fullAmount);
	}

	/**
	 * GET AMOUNT EXCLUDING TAXES
	 *
	 * @return float
	 */
	public function getAmountExcludingTaxes(): float
	{
		return $this->_call($this->amountExcludingTaxes);
	}

	/**
	 * SET AMOUNT EXCLUDING TAXES
	 *
	 * @param float|callable $amountExcludingTaxes
	 * @return $this
	 */
	public function setAmountExcludingTaxes($amountExcludingTaxes): Cart
	{
		return $this->_set($this->amountExcludingTaxes, $amountExcludingTaxes);
	}

	/**
	 * GET AMOUNT INCLUDING TAXES
	 *
	 * @return float
	 */
	public function getAmountIncludingTaxes(): float
	{
		return $this->_call($this->amountIncludingTaxes);
	}

	/**
	 * SET AMOUNT INCLUDING TAXES
	 *
	 * @param float|callable $amountIncludingTaxes
	 * @return $this
	 */
	public function setPriceIncludingTaxes($amountIncludingTaxes): Cart
	{
		return $this->_set($this->amountIncludingTaxes, $amountIncludingTaxes);
	}

	/**
	 * GET AMOUNT VAT
	 *
	 * @return float
	 */
	public function getAmountVat(): float
	{
		return $this->_call($this->amountVat);
	}

	/**
	 * SET AMOUNT VAT
	 *
	 * @param float|callable $amountVat
	 * @return $this
	 */
	public function setAmountVat($amountVat): Cart
	{
		return $this->_set($this->amountVat, $amountVat);
	}

	/**
	 * GET QUANTITY
	 *
	 * @return int
	 */
	public function getQuantity(): int
	{
		return $this->_call($this->quantity);
	}

	/**
	 * SET QUANTITY
	 *
	 * @param int|callable $quantity
	 * @return $this
	 */
	public function setQuantity($quantity): Cart
	{
		return $this->_set($this->quantity, $quantity);
	}

	/**
	 * GET SHIPPING UNIT COST
	 *
	 * @return float
	 */
	public function getShippingUnitCost(): float
	{
		return $this->_call($this->shippingUnitCost);
	}

	/**
	 * SET SHIPPING UNIT COST
	 *
	 * @param float|callable $shippingUnitCost
	 * @return $this
	 */
	public function setShippingUnitCost($shippingUnitCost): Cart
	{
		return $this->_set($this->shippingUnitCost, $shippingUnitCost);
	}

	/**
	 * GET SHIPPING GEO AREA
	 *
	 * @return string
	 */
	public function getShippingGeoArea(): string
	{
		return $this->_call($this->shippingGeoArea);
	}

	/**
	 * SET SHIPPING GEO AREA
	 *
	 * @param string|callable $shippingGeoArea
	 * @return $this
	 */
	public function setShippingGeoArea($shippingGeoArea): Cart
	{
		return $this->_set($this->shippingGeoArea, $shippingGeoArea);
	}

	/**
	 * GET SHIPPING ZONE
	 *
	 * @return string
	 */
	public function getShippingZone(): string
	{
		return $this->_call($this->shippingZone);
	}

	/**
	 * SET SHIPPING ZONE
	 *
	 * @param string|callable $shippingZone
	 * @return $this
	 */
	public function setShippingZone($shippingZone): Cart
	{
		return $this->_set($this->shippingZone, $shippingZone);
	}

	/**
	 * GET SHIPPING REF
	 *
	 * @return string
	 */
	public function getShippingRef(): string
	{
		return $this->_call($this->shippingRef);
	}

	/**
	 * SET SHIPPING REF
	 *
	 * @param string|callable $shippingRef
	 * @return $this
	 */
	public function setShippingRef($shippingRef): Cart
	{
		return $this->_set($this->shippingRef, $shippingRef);
	}
    
    /**
	 * GET TERMS OF SALES
	 *
	 * @return bool
	 */
	public function getTermsOfSales(): bool
	{
		return $this->_call($this->termsOfSales);
	}

	/**
	 * SET TERMS OF SALES
	 *
	 * @param bool|callable $termsOfSales
	 * @return $this
	 */
	public function setTermsOfSales($termsOfSales): Cart
	{
		return $this->_set($this->termsOfSales, $termsOfSales);
	}

	/**
	 * GET TERMS OF USE
	 *
	 * @return bool
	 */
	public function getTermsOfUse(): bool
	{
		return $this->_call($this->termsOfUse);
	}

	/**
	 * SET TERMS OF USE
	 *
	 * @param bool|callable $termsOfUse
	 * @return $this
	 */
	public function setTermsOfUse($termsOfUse): Cart
	{
		return $this->_set($this->termsOfUse, $termsOfUse);
	}
}