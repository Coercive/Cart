<?php
namespace Coercive\Shop\Cart\Collection;

use Coercive\Shop\Cart\Entity\Error;
use Exception;
use Coercive\Shop\Cart\Ext\Entity;

/**
 * @see \Coercive\Shop\Cart\Cart
 */
class Errors extends Entity
{
    /** @var array Error list */
    private array $errors = [];

    /**
     * ADD ERROR
     *
     * @param Error $error
     * @param int|string $key [optional]
     * @param bool $overwrite [optional]
     * @return $this
     * @throws Exception
     */
    public function add(Error $error, $key = null, bool $overwrite = false): Errors
	{
        if (null === $key) {
            $this->errors[] = $error;
            return $this;
        }

        if (isset($this->errors[$key]) && !$overwrite) {
            throw new Exception("Key $key already in use.");
        }

        $this->errors[$key] = $error;
        return $this;
    }

    /**
     * DELETE PROMO
     *
     * @param int|string $key
     * @return $this
     */
    public function delete($key): Errors
	{
        if (array_key_exists($key, $this->errors)) {
            unset($this->errors[$key]);
        }
        return $this;
    }

    /**
	 * DELETE ALL PROMOS
	 *
	 * @return $this
	 */
	public function clear(): Errors
	{
		$this->errors = [];
		return $this;
	}

    /**
     * GET ITEM
     *
     * @param int|string $key
     * @return Error
     * @throws Exception
     */
    public function get($key): Error
	{
        if (isset($this->errors[$key])) {
            return $this->errors[$key];
        }
        else {
            throw new Exception("Invalid key $key.");
        }
    }

	/**
	 * @see Error::errors()
	 * @return Error[]
	 */
	public function all(): array
	{
		return $this->errors();
	}

	/**
	 * ALL ERRORS
	 *
	 * @return Error[]
	 */
	public function errors(): array
	{
		return $this->errors;
	}

    /**
     * KEYS
     *
     * @return array
     */
    public function keys(): array
	{
        return array_keys($this->errors);
    }

    /**
     * LENGTH
     *
     * @return int
     */
    public function length(): int
	{
        return count($this->errors);
    }

    /**
     * KEY EXISTS
     *
     * @param int|string $key
     * @return bool
     */
    public function exists($key): bool
	{
        return array_key_exists($key, $this->errors);
    }

	/**
	 * @param callable $function
	 * @return $this
	 * @throws Exception
	 */
	public function each(callable $function): self
	{
		foreach ($keys = $this->keys() as $key) {
			if($error = $this->get($key)) {
				$function($error, $key, $keys);
			}
		}
		return $this;
	}
}
