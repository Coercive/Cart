<?php
namespace Coercive\Shop\Cart;

use Coercive\Shop\Cart\Collection\Promos;
use Coercive\Shop\Cart\Entity\Billing;
use Coercive\Shop\Cart\Entity\Error;
use Coercive\Shop\Cart\Entity\Gift;
use Coercive\Shop\Cart\Entity\Payment;
use Coercive\Shop\Cart\Entity\Promo;
use Coercive\Shop\Cart\Entity\Shipping;
use Coercive\Shop\Cart\Entity\User;
use Coercive\Shop\Cart\Ext\Address;
use Coercive\Shop\Cart\Ext\Entity;
use Coercive\Shop\Cart\Collection\Items;

/**
 * Class Cart
 *
 * @package		Coercive\Shop\Cart
 * @link		https://github.com/Coercive/Cart
 *
 * @author  	Anthony Moral <contact@coercive.fr>
 * @copyright   2019 Anthony Moral
 * @license 	MIT
 */
class Cart extends Entity
{
###########################################################################################################
# BIND ITEMS

    /** @var User|null */
    private ? User $user = null;

    /** @var Items|null */
    private ? Items $items = null;

	/** @var Address|Billing|null */
	private $billing = null;

    /** @var Address|Shipping|null */
    private $shipping = null;

    /** @var Gift|null */
    private ? Gift $gift = null;

	/** @var Promos|null */
	private ? Promos $promos = null;

    /** @var Promo|null */
    private ? Promo $promo = null;

    /** @var Payment|null */
    private ? Payment $payment = null;

	/** @var Error|null */
	private ? Error $error = null;

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
	 * SINGLETON SHIPPING
	 *
	 * @param Address|null $shipping [optional]
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
	 * @param Address|null $billing [optional]
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
	 * @param Gift|null $gift [optional]
	 * @return Gift
	 */
    public function Gift(Gift $gift = null): Gift
	{
	    if($gift) { return $this->gift = $gift; }
        return null === $this->gift ? $this->gift = new Gift : $this->gift;
    }

	/**
	 * SINGLETON COLLECTION PROMOS
	 *
	 * @param Promos|null $promos [optional]
	 * @return Promos
	 */
	public function Promos(Promos $promos = null): Promos
	{
		if($promos) { return $this->promos = $promos; }
		return null === $this->promos ? $this->promos = new Promos : $this->promos;
	}

	/**
	 * SINGLETON PROMO
	 *
	 * @param Promo|null $promo [optional]
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
	 * @param Payment|null $payment [optional]
	 * @return Payment
	 */
    public function Payment(Payment $payment = null): Payment
	{
	    if($payment) { return $this->payment = $payment; }
        return null === $this->payment ? $this->payment = new Payment : $this->payment;
    }

	/**
	 * SINGLETON ERROR
	 *
	 * @param Error|null $error [optional]
	 * @return Error
	 */
	public function Error(Error $error = null): Error
	{
		if($error) { return $this->error = $error; }
		return null === $this->error ? $this->error = new Error : $this->error;
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

	/** @var string|callable */
	private $message = '';

###########################################################################################################
# ACCESSORS

	/**
	 * GET TITLE
	 *
	 * @return string
	 */
	public function getTitle(): string
	{
		return (string) $this->_call($this->title);
	}

	/**
	 * SET TITLE
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setTitle($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->title, $datas, $type);
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
	 * @param int|string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setRef($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->ref, $datas, $type);
	}

	/**
	 * GET AMOUNT
	 *
	 * @return float
	 */
	public function getAmount(): float
	{
		return (float) $this->_call($this->amount);
	}

	/**
	 * SET AMOUNT
	 *
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setAmount($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->amount, $datas, $type);
	}

    /**
	 * GET SHIPPING AMOUNT
	 *
	 * @return float
	 */
	public function getShippingAmount(): float
	{
		return (float) $this->_call($this->shippingAmount);
	}

	/**
	 * SET SHIPPING AMOUNT
	 *
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setShippingAmount($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->shippingAmount, $datas, $type);
	}
    
    /**
	 * GET FULL AMOUNT
	 *
	 * @return float
	 */
	public function getFullAmount(): float
	{
		return (float) $this->_call($this->fullAmount);
	}

	/**
	 * SET FULL AMOUNT
	 *
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setFullAmount($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->fullAmount, $datas, $type);
	}

	/**
	 * GET AMOUNT EXCLUDING TAXES
	 *
	 * @return float
	 */
	public function getAmountExcludingTaxes(): float
	{
		return (float) $this->_call($this->amountExcludingTaxes);
	}

	/**
	 * SET AMOUNT EXCLUDING TAXES
	 *
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setAmountExcludingTaxes($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->amountExcludingTaxes, $datas, $type);
	}

	/**
	 * GET AMOUNT INCLUDING TAXES
	 *
	 * @return float
	 */
	public function getAmountIncludingTaxes(): float
	{
		return (float) $this->_call($this->amountIncludingTaxes);
	}

	/**
	 * SET AMOUNT INCLUDING TAXES
	 *
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setPriceIncludingTaxes($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->amountIncludingTaxes, $datas, $type);
	}

	/**
	 * GET AMOUNT VAT
	 *
	 * @return float
	 */
	public function getAmountVat(): float
	{
		return (float) $this->_call($this->amountVat);
	}

	/**
	 * SET AMOUNT VAT
	 *
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setAmountVat($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->amountVat, $datas, $type);
	}

	/**
	 * GET QUANTITY
	 *
	 * @return int
	 */
	public function getQuantity(): int
	{
		return (int) $this->_call($this->quantity);
	}

	/**
	 * SET QUANTITY
	 *
	 * @param int|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setQuantity($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->quantity, $datas, $type);
	}

	/**
	 * GET SHIPPING UNIT COST
	 *
	 * @return float
	 */
	public function getShippingUnitCost(): float
	{
		return (float) $this->_call($this->shippingUnitCost);
	}

	/**
	 * SET SHIPPING UNIT COST
	 *
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setShippingUnitCost($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->shippingUnitCost, $datas, $type);
	}

	/**
	 * GET SHIPPING GEO AREA
	 *
	 * @return string
	 */
	public function getShippingGeoArea(): string
	{
		return (string) $this->_call($this->shippingGeoArea);
	}

	/**
	 * SET SHIPPING GEO AREA
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setShippingGeoArea($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->shippingGeoArea, $datas, $type);
	}

	/**
	 * GET SHIPPING ZONE
	 *
	 * @return string
	 */
	public function getShippingZone(): string
	{
		return (string) $this->_call($this->shippingZone);
	}

	/**
	 * SET SHIPPING ZONE
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setShippingZone($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->shippingZone, $datas, $type);
	}

	/**
	 * GET SHIPPING REF
	 *
	 * @return string
	 */
	public function getShippingRef(): string
	{
		return (string) $this->_call($this->shippingRef);
	}

	/**
	 * SET SHIPPING REF
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setShippingRef($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->shippingRef, $datas, $type);
	}
    
    /**
	 * GET TERMS OF SALES
	 *
	 * @return bool
	 */
	public function getTermsOfSales(): bool
	{
		return (bool) $this->_call($this->termsOfSales);
	}

	/**
	 * SET TERMS OF SALES
	 *
	 * @param bool|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setTermsOfSales($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->termsOfSales, $datas, $type);
	}

	/**
	 * GET TERMS OF USE
	 *
	 * @return bool
	 */
	public function getTermsOfUse(): bool
	{
		return (bool) $this->_call($this->termsOfUse);
	}

	/**
	 * SET TERMS OF USE
	 *
	 * @param bool|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setTermsOfUse($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->termsOfUse, $datas, $type);
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
	public function setMessage($datas, string $type = self::TYPE_AUTO): Cart
	{
		return $this->_set($this->message, $datas, $type);
	}
}
