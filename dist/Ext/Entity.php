<?php
namespace Coercive\Shop\Cart\Ext;

use Closure;
use Exception;
use ReflectionMethod;
use Coercive\Shop\Cart\Store\HandleClosure;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
abstract class Entity
{
###########################################################################################################
# SYSTEM

	const TYPE_RAW = 'TYPE_RAW';
	const TYPE_CLOSURE = 'TYPE_CLOSURE';
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
		switch ($field['type']) {
			case self::TYPE_RAW:
				return $field['data'];
			case self::TYPE_CLOSURE:
				return call_user_func($field['data'], $this);
			case self::TYPE_CLASS:
				if($field['static']) {
					return ($field['class'])::{$field['method']}();
				}
				else {
					return (new ($field['class'])())->{$field['method']}();
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
	 * @param string $type [optional]
	 * @return $this
	 */
	protected function _set(&$field, $datas, string $type = self::TYPE_RAW)
	{
		try {
			if($datas instanceOf Closure) {
				$type = self::TYPE_CLOSURE;
				$datas = new HandleClosure($datas);
			}
			switch ($type) {
				case self::TYPE_RAW:
					$field = [
						'type' => self::TYPE_RAW,
						'data' => $datas
					];
					break;
				case self::TYPE_CLOSURE:
					$field = [
						'type' => self::TYPE_CLOSURE,
						'data' => $datas
					];
					break;
				case self::TYPE_CLASS:
					preg_match('`^(?P<class>[\\\a-z0-9_]+)::(?P<method>[a-z0-9_]+)$`i', $datas, $matches);
					$class = $matches['class'] ?? '';
					$method = $matches['method'] ?? '';
					$field = [
						'type' => self::TYPE_CLOSURE,
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
	 * @return $this
	 */
	public function set($key, $datas) {
		return $this->_set($this->customs[$key], $datas);
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
     * @return $this
     */
    public function setOptionalField1($datas) {
        return $this->_set($this->optField1, $datas);
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
     * @return $this
     */
    public function setOptionalField2($datas)
	{
        return $this->_set($this->optField2, $datas);
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
     * @return $this
     */
    public function setOptionalField3($datas)
	{
        return $this->_set($this->optField3, $datas);
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
     * @return $this
     */
    public function setOptionalField4($datas)
	{
        return $this->_set($this->optField4, $datas);
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
     * @return $this
     */
    public function setOptionalField5($datas)
	{
        return $this->_set($this->optField5, $datas);
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
     * @return $this
     */
    public function setOptionalField6($datas)
	{
        return $this->_set($this->optField6, $datas);
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
     * @return $this
     */
    public function setOptionalField7($datas)
	{
        return $this->_set($this->optField7, $datas);
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
     * @return $this
     */
    public function setOptionalField8($datas)
	{
        return $this->_set($this->optField8, $datas);
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
     * @return $this
     */
    public function setOptionalField9($datas)
	{
        return $this->_set($this->optField9, $datas);
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
     * @return $this
     */
    public function setOptionalField10($datas)
	{
        return $this->_set($this->optField10, $datas);
    }
}
