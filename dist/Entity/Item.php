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

    /** @var array|callable */
	private $mediums = [];

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

	/** @var string|callable */
	private $recurrentStart = '';

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
    public function setTitle($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->title, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setResume($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->resume, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setDescription($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->description, $datas, $type);
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
     * @param float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setPrice($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->price, $datas, $type);
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
     * @param float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setPriceExcludingTaxes($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->priceExcludingTaxes, $datas, $type);
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
     * @param float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setPriceIncludingTaxes($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->priceIncludingTaxes, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setUnitPrice($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->unitPrice, $datas, $type);
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
     * @param float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setUnitPriceExcludingTaxes($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->unitPriceExcludingTaxes, $datas, $type);
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
     * @param float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setUnitPriceIncludingTaxes($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->unitPriceIncludingTaxes, $datas, $type);
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
     * @param float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setTaxesRate($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->taxesRate, $datas, $type);
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
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setShippingCost($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->shippingCost, $datas, $type);
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
	public function setShippingUnitCost($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->shippingUnitCost, $datas, $type);
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
	 * @param int|string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setShippingGeoArea($datas, string $type = self::TYPE_AUTO)
	{
		return $this->_set($this->shippingGeoArea, $datas, $type);
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
	 * @param int|string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setShippingZone($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->shippingZone, $datas, $type);
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
	 * @param int|string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setShippingRef($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->shippingRef, $datas, $type);
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
    public function setQuantity($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->quantity, $datas, $type);
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
    public function setRef($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->ref, $datas, $type);
    }

	/**
	 * GET ID
	 *
	 * @return int|string
	 */
	public function getId()
	{
		return $this->_call($this->id);
	}

	/**
	 * SET ID
	 *
	 * @param int|string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setId($datas, string $type = self::TYPE_AUTO)
	{
		return $this->_set($this->id, $datas, $type);
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
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setType($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->type, $datas, $type);
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
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setMedium($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->medium, $datas, $type);
	}

	/**
	 * GET MEDIUMS
	 *
	 * @return array
	 */
	public function getMediums(): array
	{
		$array = $this->_call($this->mediums);
		return is_array($array) ? $array : [];
	}

	/**
	 * SET MEDIUMS
	 *
	 * @param array|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setMediums($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->mediums, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setImage($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->image, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setThumbnail($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->thumbnail, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setUrl($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->url, $datas, $type);
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
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setSlug($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->slug, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setStartDate($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->startDate, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setEndDate($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->endDate, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setStartId($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->startId, $datas, $type);
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
     * @param string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setEndId($datas, string $type = self::TYPE_AUTO): Item
	{
        return $this->_set($this->endId, $datas, $type);
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
	 * @param bool|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setRecurrent($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->recurrent, $datas, $type);
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
	 * @param int|string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setRecurrentDelay($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->recurrentDelay, $datas, $type);
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
	 * @param int|string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setRecurrentUnit($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->recurrentUnit, $datas, $type);
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
	public function setAmount($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->amount, $datas, $type);
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
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setFirstAmount($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->firstAmount, $datas, $type);
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
	 * @param float|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setRecurrentAmount($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->recurrentAmount, $datas, $type);
	}

	/**
	 * GET RECURENT START
	 *
	 * @return string
	 */
	public function getRecurrentStart(): string
	{
		return (string) $this->_call($this->recurrentStart);
	}

	/**
	 * SET RECURENT START
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setRecurrentStart($datas, string $type = self::TYPE_AUTO): Item
	{
		return $this->_set($this->recurrentStart, $datas, $type);
	}
}