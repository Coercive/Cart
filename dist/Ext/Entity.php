<?php
namespace Coercive\Shop\Cart\Ext;

use Exception;
use ReflectionMethod;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
abstract class Entity
{
###########################################################################################################
# SYSTEM

	const TYPE_AUTO = 'TYPE_AUTO';
	const TYPE_RAW = 'TYPE_RAW';
	const TYPE_CLASS = 'TYPE_CLASS';

    /** @var bool */
    protected $modified = false;

    /** @var bool */
    protected $enabled = false;

	/**
	 * CALL FIELD
	 *
	 * @param mixed $field
	 * @return mixed
	 */
	protected function _call($field)
	{
		switch ($field['type'] ?? '') {
			case self::TYPE_RAW:
				return $field['data'];
			case self::TYPE_CLASS:
				$class = $field['class'];
				$method = $field['method'];
				if($field['static']) {
					return $class::{$method}($this);
				}
				else {
					return (new $class())->{$method}($this);
				}
			default:
				return null;
		}
	}

	/**
	 * SET FIELD
	 *
	 * @param mixed $field
	 * @param mixed $datas
	 * @param string $type
	 * @return $this
	 */
	protected function _set(&$field, $datas, string $type)
	{
		try {
			if($type === self::TYPE_AUTO) {
				if(is_string($datas) && preg_match('`^([\\\a-z0-9_]+)::([a-z0-9_]+)$`i', $datas)) {
					$type = self::TYPE_CLASS;
				}
				else {
					$type = self::TYPE_RAW;
				}
			}
			switch ($type) {
				case self::TYPE_RAW:
					$field = [
						'type' => self::TYPE_RAW,
						'data' => $datas
					];
					break;
				case self::TYPE_CLASS:
					preg_match('`^(?P<class>[\\\a-z0-9_]+)::(?P<method>[a-z0-9_]+)$`i', $datas, $matches);
					$class = $matches['class'] ?? '';
					$method = $matches['method'] ?? '';
					$field = [
						'type' => self::TYPE_CLASS,
						'static' => (new ReflectionMethod($class, $method))->isStatic(),
						'class' => $class,
						'method' => $method
					];
					break;
				default:
					throw new Exception;
			}
		}
		catch (Exception $e) {
			$field = [
				'type' => self::TYPE_RAW,
				'data' => null
			];
		}
		$this->modified = true;
		return $this;
	}

    /**
     * IS MODIFIED
     *
     * @return bool
     */
    public function isModified(): bool
	{
        return $this->modified;
    }

    /**
     * IS ENABLED
     *
     * @return bool
     */
    public function isEnabled(): bool
	{
        return $this->enabled;
    }

    /**
     * IS ENABLED
     *
     * @return bool
     */
    public function isDisabled(): bool
	{
        return !$this->enabled;
    }

    /**
     * ENABLE
     *
     * @return $this
     */
    public function enable()
	{
        $this->enabled = true;
        return $this;
    }

    /**
     * DISABLE
     *
     * @return $this
     */
    public function disable()
	{
        $this->enabled = false;
        return $this;
    }

###########################################################################################################
# PROPERTIES

	/** @var array */
	protected $customs = [];

    /** @var mixed */
    protected $optField1 = null;
    protected $optField2 = null;
    protected $optField3 = null;
    protected $optField4 = null;
    protected $optField5 = null;
    protected $optField6 = null;
    protected $optField7 = null;
    protected $optField8 = null;
    protected $optField9 = null;
    protected $optField10 = null;

###########################################################################################################
# ACCESSORS

	/**
	 * GET CUSTOM
	 *
	 * @param mixed $key
	 * @return mixed
	 */
	public function get($key)
	{
		return $this->_call($this->customs[$key] ?? null);
	}

	/**
	 * SET CUSTOM
	 *
	 * @param mixed $key
	 * @param mixed|callable $datas
	 * @param string $type [optional]
	 * @return $this
	 */
	public function set($key, $datas, string $type = self::TYPE_AUTO)
	{
		return $this->_set($this->customs[$key], $datas, $type);
	}

    /**
     * GET OPTIONAL FIELD 1
     *
     * @return mixed
     */
    public function getOptionalField1()
	{
        return $this->_call($this->optField1);
    }

    /**
     * SET OPTIONAL FIELD 1
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField1($datas, string $type = self::TYPE_AUTO) {
        return $this->_set($this->optField1, $datas, $type);
    }

    /**
     * GET OPTIONAL FIELD 2
     *
     * @return mixed
     */
    public function getOptionalField2()
	{
        return $this->_call($this->optField2);
    }

    /**
     * SET OPTIONAL FIELD 2
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField2($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->optField2, $datas, $type);
    }

    /**
     * GET OPTIONAL FIELD 3
     *
     * @return mixed
     */
    public function getOptionalField3()
	{
        return $this->_call($this->optField3);
    }

    /**
     * SET OPTIONAL FIELD 3
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField3($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->optField3, $datas, $type);
    }

    /**
     * GET OPTIONAL FIELD 4
     *
     * @return mixed
     */
    public function getOptionalField4()
	{
        return $this->_call($this->optField4);
    }

    /**
     * SET OPTIONAL FIELD 4
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField4($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->optField4, $datas, $type);
    }

    /**
     * GET OPTIONAL FIELD 5
     *
     * @return mixed
     */
    public function getOptionalField5()
	{
        return $this->_call($this->optField5);
    }

    /**
     * SET OPTIONAL FIELD 5
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField5($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->optField5, $datas, $type);
    }

    /**
     * GET OPTIONAL FIELD 6
     *
     * @return mixed
     */
    public function getOptionalField6()
	{
        return $this->_call($this->optField6);
    }

    /**
     * SET OPTIONAL FIELD 6
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField6($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->optField6, $datas, $type);
    }

    /**
     * GET OPTIONAL FIELD 7
     *
     * @return mixed
     */
    public function getOptionalField7()
	{
        return $this->_call($this->optField7);
    }

    /**
     * SET OPTIONAL FIELD 7
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField7($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->optField7, $datas, $type);
    }

    /**
     * GET OPTIONAL FIELD 8
     *
     * @return mixed
     */
    public function getOptionalField8()
	{
        return $this->_call($this->optField8);
    }

    /**
     * SET OPTIONAL FIELD 8
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField8($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->optField8, $datas, $type);
    }

    /**
     * GET OPTIONAL FIELD 9
     *
     * @return mixed
     */
    public function getOptionalField9()
	{
        return $this->_call($this->optField9);
    }

    /**
     * SET OPTIONAL FIELD 9
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField9($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->optField9, $datas, $type);
    }

    /**
     * GET OPTIONAL FIELD 10
     *
     * @return mixed
     */
    public function getOptionalField10()
	{
        return $this->_call($this->optField10);
    }

    /**
     * SET OPTIONAL FIELD 10
     *
     * @param mixed|callable $datas
	 * @param string $type [optional]
     * @return $this
     */
    public function setOptionalField10($datas, string $type = self::TYPE_AUTO)
	{
        return $this->_set($this->optField10, $datas, $type);
    }
}