<?php
namespace Coercive\Shop\Cart\Entity;

use Coercive\Shop\Cart\Collection\Items;
use Coercive\Shop\Cart\Collection\Promos;
use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class Promo extends Entity
{
###########################################################################################################
# PROCESS

    /**
     * CALC
     *
     * @param float $price
     * @return float
     */
    public function calc(float $price): float
	{
        # PRICE CUT
        if($cut = $this->getPriceCut()) {
            return $price - $cut;
        }

        # PERCENT
        if($percent = $this->getPercent()) {
            return $price - $price * $percent;
        }

        # NEW PRICE
        if($newPrice = $this->getNewPrice()) {
            return $newPrice;
        }

        # INACTIVE
        return 0.0;
    }

###########################################################################################################
# BIND ITEMS

	/** @var Gift|null */
	private ? Gift $gift = null;

	/** @var Items|null */
	private ? Items $items = null;

	/** @var Promos|null */
	private ? Promos $promos = null;

	/** @var User|null */
	private ? User $user = null;

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

###########################################################################################################
# PROPERTIES

    /** @var int|string|callable */
    private $ref = '';

    /** @var int|string|callable */
    private $token = '';

	/** @var int|string|callable */
	private $type = '';

    /** @var string|callable */
    private $title = '';

    /** @var string|callable */
    private $resume = '';

    /** @var string|callable */
    private $description = '';

    /** @var int|float|callable */
    private $percent = 0;

    /** @var int|float|callable */
    private $priceCut = 0;

    /** @var int|float|callable */
    private $newPrice = 0;

	/** @var int|string|array|callable */
	private $itemRefs = '';

	/** @var bool|callable */
	private $limitedInTime = false;

	/** @var string|callable */
	private $dateStart = '';

	/** @var string|callable */
	private $dateEnd = '';

	/** @var bool|callable */
	private $limitedOccurrences = false;

	/** @var int|callable */
	private $occurrence = 0;

	/** @var int|callable */
	private $offsetOccurrence = 0;

	/** @var int|callable */
	private $numberOfOccurrences = 0;

	/** @var string|callable */
	private $occurrenceDateStart = '';

	/** @var string|callable */
	private $occurrenceDateEnd = '';

###########################################################################################################
# ACCESSORS

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
    public function setRef($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->ref, $datas, $type);
    }

    /**
     * GET TOKEN
     *
     * @return int|string
     */
    public function getToken()
	{
        return $this->_call($this->token);
    }

    /**
     * SET TOKEN
     *
     * @param int|string|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setToken($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->token, $datas, $type);
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
	public function setType($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->type, $datas, $type);
	}

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
    public function setTitle($datas, string $type = self::TYPE_AUTO): Promo
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
    public function setResume($datas, string $type = self::TYPE_AUTO): Promo
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
    public function setDescription($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->description, $datas, $type);
    }

    /**
     * GET PERCENT
     *
     * @return int|float
     */
    public function getPercent()
	{
        return $this->_call($this->percent);
    }

    /**
     * SET PERCENT
     *
     * @param int|float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setPercent($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->percent, $datas, $type);
    }

    /**
     * GET PRICE CUT
     *
     * @return int|float
     */
    public function getPriceCut()
	{
        return $this->_call($this->priceCut);
    }

    /**
     * SET PRICE CUT
     *
     * @param int|float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setPriceCut($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->priceCut, $datas, $type);
    }

    /**
     * GET NEW PRICE
     *
     * @return int|float
     */
    public function getNewPrice()
	{
        return $this->_call($this->newPrice);
    }

    /**
     * SET NEW PRICE
     *
     * @param int|float|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setNewPrice($datas, string $type = self::TYPE_AUTO): Promo
	{
        return $this->_set($this->newPrice, $datas, $type);
    }

	/**
	 * GET ITEM REFERENCES
	 *
	 * @return int|string|array
	 */
	public function getItemRefs()
	{
		return $this->_call($this->itemRefs);
	}

	/**
	 * SET ITEM REFERENCES
	 *
	 * @param int|string|array|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setItemRefs($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->itemRefs, $datas, $type);
	}

	/**
	 * GET LIMITED IN TIME
	 *
	 * @return bool
	 */
	public function isLimitedInTime(): bool
	{
		return (bool) $this->_call($this->limitedInTime);
	}

	/**
	 * SET LIMITED IN TIME
	 *
	 * @param bool|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setLimitedInTime($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->limitedInTime, $datas, $type);
	}

	/**
	 * GET DATE START
	 *
	 * @return string
	 */
	public function getDateStart(): string
	{
		return (string) $this->_call($this->dateStart);
	}

	/**
	 * SET DATE START
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setDateStart($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->dateStart, $datas, $type);
	}

	/**
	 * GET DATE END
	 *
	 * @return string
	 */
	public function getDateEnd(): string
	{
		return (string) $this->_call($this->dateEnd);
	}

	/**
	 * SET DATE END
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setDateEnd($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->dateEnd, $datas, $type);
	}

	/**
	 * GET LIMITED OCCURRENCES
	 *
	 * @return bool
	 */
	public function isLimitedOccurrences(): bool
	{
		return (bool) $this->_call($this->limitedOccurrences);
	}

	/**
	 * SET LIMITED OCCURRENCES
	 *
	 * @param bool|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setLimitedOccurrences($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->limitedOccurrences, $datas, $type);
	}

	/**
	 * GET OCCURRENCE
	 *
	 * @return int
	 */
	public function getOccurrence(): int
	{
		return (int) $this->_call($this->occurrence);
	}

	/**
	 * SET OCCURRENCE
	 *
	 * @param int|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setOccurrence($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->occurrence, $datas, $type);
	}

	/**
	 * GET OFFSET OCCURRENCE
	 *
	 * @return int
	 */
	public function getOffsetOccurrence(): int
	{
		return (int) $this->_call($this->offsetOccurrence);
	}

	/**
	 * SET OFFSET OCCURRENCE
	 *
	 * @param int|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setOffsetOccurrence($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->offsetOccurrence, $datas, $type);
	}

	/**
	 * GET NUMBER OF OCCURRENCES
	 *
	 * @return int
	 */
	public function getNumberOfOccurrences(): int
	{
		return (int) $this->_call($this->numberOfOccurrences);
	}

	/**
	 * SET NUMBER OF OCCURRENCES
	 *
	 * @param int|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setNumberOfOccurrences($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->numberOfOccurrences, $datas, $type);
	}

	/**
	 * GET OCCURRENCE DATE START
	 *
	 * @return string
	 */
	public function getOccurrenceDateStart(): string
	{
		return (string) $this->_call($this->occurrenceDateStart);
	}

	/**
	 * SET OCCURRENCE DATE START
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setOccurrenceDateStart($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->occurrenceDateStart, $datas, $type);
	}

	/**
	 * GET OCCURRENCE DATE END
	 *
	 * @return string
	 */
	public function getOccurrenceDateEnd(): string
	{
		return (string) $this->_call($this->occurrenceDateEnd);
	}

	/**
	 * SET OCCURRENCE DATE END
	 *
	 * @param string|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function setOccurrenceDateEnd($datas, string $type = self::TYPE_AUTO): Promo
	{
		return $this->_set($this->occurrenceDateEnd, $datas, $type);
	}
}