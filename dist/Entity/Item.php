<?php
namespace Coercive\Shop\Cart\Entity;

use Coercive\Shop\Cart\Collection\Promos;
use Coercive\Shop\Cart\Ext\Address;
use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Item extends Entity
{
###########################################################################################################
# BIND ITEMS

	/** @var Billing */
	private $billing = null;

    /** @var Shipping */
    private $shipping = null;

    /** @var Gift */
    private $gift = null;

	/** @var Promos */
	private $promos = null;

    /** @var Promo */
    private $promo = null;

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
	 * SINGLETON COLLECTION PROMOS
	 *
	 * @param Promos $promos [optional]
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
     * @param Promo $promo [optional]
     * @return Promo
     */
    public function Promo(Promo $promo = null): Promo
	{
	    if($promo) { return $this->promo = $promo; }
        return null === $this->promo ? $this->promo = new Promo : $this->promo;
    }

###########################################################################################################
# PROPERTIES

    /** @var string|callable */
    private $title = '';

    /** @var string|callable */
    private $resume = '';

    /** @var string|callable */
    private $description = '';

    /** @var float|callable */
    private $price = 0;

    /** @var float|callable */
    private $priceExcludingTaxes = 0;

    /** @var float|callable */
    private $priceIncludingTaxes = 0;

    /** @var float|callable */
    private $unitPrice = 0;

    /** @var float|callable */
    private $unitPriceExcludingTaxes = 0;

    /** @var float|callable */
    private $unitPriceIncludingTaxes = 0;

    /** @var float|callable */
    private $taxesRate = 0;

    /** @var float|callable */
	private $shippingCost = 0;

	/** @var float|callable */
	private $shippingUnitCost = 0;

	/** @var string|callable */
	private $shippingGeoArea = '';

	/** @var string|callable */
	private $shippingZone = '';

	/** @var string|callable */
	private $shippingRef = '';

    /** @var int|callable */
    private $quantity = 0;

    /** @var int|string|callable */
    private $ref = '';

	/** @var int|string|callable */
	private $id = '';

    /** @var string|callable */
    private $type = '';

    /** @var string|callable */
	private $medium = '';

    /** @var string|callable */
    private $image = '';

    /** @var string|callable */
    private $thumbnail = '';

    /** @var string|callable */
    private $url = '';

    /** @var string|callable */
    private $slug = '';

    /** @var string|callable */
    private $startDate = '';

    /** @var string|callable */
    private $endDate = '';

    /** @var int|string|callable */
    private $startId = '';

    /** @var int|string|callable */
    private $endId = '';

	/** @var bool|callable */
	private $recurrent = false;

	/** @var int|string|callable */
	private $recurrentDelay = 0;

	/** @var int|string|callable */
	private $recurrentUnit = '';

	/** @var float|callable */
	private $amount = 0;

	/** @var float|callable */
	private $firstAmount = 0;

	/** @var float|callable */
	private $recurrentAmount = 0;

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
     * @param string|callable $title
     * @return $this
     */
    public function setTitle($title): Item
	{
        return $this->_set($this->title, $title);
    }

    /**
     * GET RESUME
     *
     * @return string
     */
    public function getResume(): string
	{
        return (string) $this->_call($this->resume);
    }

    /**
     * SET RESUME
     *
     * @param string|callable $resume
     * @return $this
     */
    public function setResume($resume): Item
	{
        return $this->_set($this->resume, $resume);
    }

    /**
     * GET DESCRIPTION
     *
     * @return string
     */
    public function getDescription(): string
	{
        return (string) $this->_call($this->description);
    }

    /**
     * SET DESCRIPTION
     *
     * @param string|callable $description
     * @return $this
     */
    public function setDescription($description): Item
	{
        return $this->_set($this->description, $description);
    }

    /**
     * GET PRICE
     *
     * @return float
     */
    public function getPrice(): float
	{
        return (float) $this->_call($this->price);
    }

    /**
     * SET PRICE
     *
     * @param float|callable $price
     * @return $this
     */
    public function setPrice($price): Item
	{
        return $this->_set($this->price, $price);
    }

    /**
     * GET PRICE EXCLUDING TAXES
     *
     * @return float
     */
    public function getPriceExcludingTaxes(): float
	{
        return (float) $this->_call($this->priceExcludingTaxes);
    }

    /**
     * SET PRICE EXCLUDING TAXES
     *
     * @param float|callable $priceExcludingTaxes
     * @return $this
     */
    public function setPriceExcludingTaxes($priceExcludingTaxes): Item
	{
        return $this->_set($this->priceExcludingTaxes, $priceExcludingTaxes);
    }

    /**
     * GET PRICE INCLUDING TAXES
     *
     * @return float
     */
    public function getPriceIncludingTaxes(): float
	{
        return (float) $this->_call($this->priceIncludingTaxes);
    }

    /**
     * SET PRICE INCLUDING TAXES
     *
     * @param float|callable $priceIncludingTaxes
     * @return $this
     */
    public function setPriceIncludingTaxes($priceIncludingTaxes): Item
	{
        return $this->_set($this->priceIncludingTaxes, $priceIncludingTaxes);
    }

    /**
     * GET UNIT PRICE
     *
     * @return float
     */
    public function getUnitPrice(): float
	{
        return (float) $this->_call($this->unitPrice);
    }

    /**
     * SET UNIT PRICE
     *
     * @param string|callable $unitPrice
     * @return $this
     */
    public function setUnitPrice($unitPrice): Item
	{
        return $this->_set($this->unitPrice, $unitPrice);
    }

    /**
     * GET UNIT PRICE EXCLUDING TAXES
     *
     * @return float
     */
    public function getUnitPriceExcludingTaxes(): float
	{
        return (float) $this->_call($this->unitPriceExcludingTaxes);
    }

    /**
     * SET UNIT PRICE EXCLUDING TAXES
     *
     * @param float|callable $unitPriceExcludingTaxes
     * @return $this
     */
    public function setUnitPriceExcludingTaxes($unitPriceExcludingTaxes): Item
	{
        return $this->_set($this->unitPriceExcludingTaxes, $unitPriceExcludingTaxes);
    }

    /**
     * GET UNIT PRICE INCLUDING TAXES
     *
     * @return float
     */
    public function getUnitPriceIncludingTaxes(): float
	{
        return (float) $this->_call($this->unitPriceIncludingTaxes);
    }

    /**
     * SET UNIT PRICE INCLUDING TAXES
     *
     * @param float|callable $unitPriceIncludingTaxes
     * @return $this
     */
    public function setUnitPriceIncludingTaxes($unitPriceIncludingTaxes): Item
	{
        return $this->_set($this->unitPriceIncludingTaxes, $unitPriceIncludingTaxes);
    }

    /**
     * GET TAXES RATE
     *
     * @return float
     */
    public function getTaxesRate(): float
	{
        return (float) $this->_call($this->taxesRate);
    }

    /**
     * SET TAXES RATE
     *
     * @param float|callable $taxesRate
     * @return $this
     */
    public function setTaxesRate($taxesRate): Item
	{
        return $this->_set($this->taxesRate, $taxesRate);
    }

    /**
	 * GET SHIPPING COST
	 *
	 * @return float
	 */
	public function getShippingCost(): float
	{
		return (float) $this->_call($this->shippingCost);
	}

	/**
	 * SET SHIPPING COST
	 *
	 * @param float|callable $shippingCost
	 * @return $this
	 */
	public function setShippingCost($shippingCost): Item
	{
		return $this->_set($this->shippingCost, $shippingCost);
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
	 * @param float|callable $shippingUnitCost
	 * @return $this
	 */
	public function setShippingUnitCost($shippingUnitCost): Item
	{
		return $this->_set($this->shippingUnitCost, $shippingUnitCost);
	}

	/**
	 * GET SHIPPING GEO AREA
	 *
	 * @return int|string
	 */
	public function getShippingGeoArea()
	{
		return $this->_call($this->shippingGeoArea);
	}

	/**
	 * SET SHIPPING GEO AREA
	 *
	 * @param int|string|callable $shippingGeoArea
	 * @return $this
	 */
	public function setShippingGeoArea($shippingGeoArea)
	{
		return $this->_set($this->shippingGeoArea, $shippingGeoArea);
	}

	/**
	 * GET SHIPPING ZONE
	 *
	 * @return int|string
	 */
	public function getShippingZone()
	{
		return $this->_call($this->shippingZone);
	}

	/**
	 * SET SHIPPING ZONE
	 *
	 * @param int|string|callable $shippingZone
	 * @return $this
	 */
	public function setShippingZone($shippingZone): Item
	{
		return $this->_set($this->shippingZone, $shippingZone);
	}

	/**
	 * GET SHIPPING REF
	 *
	 * @return int|string
	 */
	public function getShippingRef()
	{
		return $this->_call($this->shippingRef);
	}

	/**
	 * SET SHIPPING REF
	 *
	 * @param int|string|callable $shippingRef
	 * @return $this
	 */
	public function setShippingRef($shippingRef): Item
	{
		return $this->_set($this->shippingRef, $shippingRef);
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
     * @param int|callable $quantity
     * @return $this
     */
    public function setQuantity($quantity): Item
	{
        return $this->_set($this->quantity, $quantity);
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
    public function setRef($ref): Item
	{
        return $this->_set($this->ref, $ref);
    }

	/**
	 * GET ID
	 *
	 * @return int|string
	 */
	public function getId() {
		return $this->_call($this->id);
	}

	/**
	 * SET ID
	 *
	 * @param int|string|callable $id
	 * @return $this
	 */
	public function setId($id) {
		return $this->_set($this->id, $id);
	}

    /**
     * GET TYPE
     *
     * @return int|string
     */
    public function getType()
	{
        return $this->_call($this->type);
    }

    /**
     * SET TYPE
     *
     * @param int|string|callable $type
     * @return $this
     */
    public function setType($type): Item
	{
        return $this->_set($this->type, $type);
    }

    /**
	 * GET MEDIUM
	 *
	 * @return int|string
	 */
	public function getMedium()
	{
		return $this->_call($this->medium);
	}

	/**
	 * SET MEDIUM
	 *
	 * @param string|callable $medium
	 * @return $this
	 */
	public function setMedium($medium): Item
	{
		return $this->_set($this->medium, $medium);
	}

    /**
     * GET IMAGE
     *
     * @return string
     */
    public function getImage(): string
	{
        return (string) $this->_call($this->image);
    }

    /**
     * SET IMAGE
     *
     * @param string|callable $image
     * @return $this
     */
    public function setImage($image): Item
	{
        return $this->_set($this->image, $image);
    }

    /**
     * GET THUMBNAIL
     *
     * @return string
     */
    public function getThumbnail(): string
	{
        return (string) $this->_call($this->thumbnail);
    }

    /**
     * SET THUMBNAIL
     *
     * @param string|callable $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail): Item
	{
        return $this->_set($this->thumbnail, $thumbnail);
    }

    /**
     * GET URL
     *
     * @return string
     */
    public function getUrl(): string
	{
        return (string) $this->_call($this->url);
    }

    /**
     * SET URL
     *
     * @param string|callable $url
     * @return $this
     */
    public function setUrl($url): Item
	{
        return $this->_set($this->url, $url);
    }

    /**
	 * GET SLUG
	 *
	 * @return string
	 */
	public function getSlug(): string
	{
		return (string) $this->_call($this->slug);
	}

	/**
	 * SET SLUG
	 *
	 * @param string|callable $slug
	 * @return $this
	 */
	public function setSlug($slug): Item
	{
		return $this->_set($this->slug, $slug);
	}

    /**
     * GET START DATE
     *
     * @return string
     */
    public function getStartDate()
	{
        return $this->_call($this->startDate);
    }

    /**
     * SET START DATE
     *
     * @param string|callable $startDate
     * @return $this
     */
    public function setStartDate($startDate): Item
	{
        return $this->_set($this->startDate, $startDate);
    }

    /**
     * GET END DATE
     *
     * @return string
     */
    public function getEndDate()
	{
        return $this->_call($this->endDate);
    }

    /**
     * SET END DATE
     *
     * @param string|callable $endDate
     * @return $this
     */
    public function setEndDate($endDate): Item
	{
        return $this->_set($this->endDate, $endDate);
    }

    /**
     * GET START ID
     *
     * @return int|string
     */
    public function getStartId()
	{
        return $this->_call($this->startId);
    }

    /**
     * SET START ID
     *
     * @param string|callable $startId
     * @return $this
     */
    public function setStartId($startId): Item
	{
        return $this->_set($this->startId, $startId);
    }

    /**
     * GET END ID
     *
     * @return int|string
     */
    public function getEndId()
	{
        return $this->_call($this->endId);
    }

    /**
     * SET END ID
     *
     * @param string|callable $endId
     * @return $this
     */
    public function setEndId($endId): Item
	{
        return $this->_set($this->endId, $endId);
    }

	/**
	 * GET RECURRENT
	 *
	 * @return bool
	 */
	public function getRecurrent()
	{
		return $this->_call($this->recurrent);
	}

	/**
	 * SET RECURRENT
	 *
	 * @param bool|callable $recurrent
	 * @return $this
	 */
	public function setRecurrent($recurrent): Item
	{
		return $this->_set($this->recurrent, $recurrent);
	}

	/**
	 * GET RECURRENT DELAY
	 *
	 * @return int|string
	 */
	public function getRecurrentDelay()
	{
		return $this->_call($this->recurrentDelay);
	}

	/**
	 * SET ECURRENT DELAY
	 *
	 * @param int|string|callable $recurrentDelay
	 * @return $this
	 */
	public function setRecurrentDelay($recurrentDelay): Item
	{
		return $this->_set($this->recurrentDelay, $recurrentDelay);
	}

	/**
	 * GET RECURRENT UNIT
	 *
	 * @return int|string
	 */
	public function getRecurrentUnit()
	{
		return $this->_call($this->recurrentUnit);
	}

	/**
	 * SET ECURRENT UNIT
	 *
	 * @param int|string|callable $recurrentUnit
	 * @return $this
	 */
	public function setRecurrentUnit($recurrentUnit): Item
	{
		return $this->_set($this->recurrentUnit, $recurrentUnit);
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
	 * @param float|callable $amount
	 * @return $this
	 */
	public function setAmount($amount): Item
	{
		return $this->_set($this->amount, $amount);
	}

	/**
	 * GET FIRST AMOUNT
	 *
	 * @return float
	 */
	public function getFirstAmount(): float
	{
		return (float) $this->_call($this->firstAmount);
	}

	/**
	 * SET FIRST AMOUNT
	 *
	 * @param float|callable $firstAmount
	 * @return $this
	 */
	public function setFirstAmount($firstAmount): Item
	{
		return $this->_set($this->firstAmount, $firstAmount);
	}

	/**
	 * GET RECURENT AMOUNT
	 *
	 * @return float
	 */
	public function getRecurrentAmount(): float
	{
		return (float) $this->_call($this->recurrentAmount);
	}

	/**
	 * SET RECURENT AMOUNT
	 *
	 * @param float|callable $recurrentAmount
	 * @return $this
	 */
	public function setRecurrentAmount($recurrentAmount): Item
	{
		return $this->_set($this->recurrentAmount, $recurrentAmount);
	}
}
