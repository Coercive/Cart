<?php
namespace Coercive\Shop\Cart\Store;

use Closure;
use ReflectionFunction;
use SuperClosure\Serializer;
use SuperClosure\Analyzer\AstAnalyzer;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class HandleClosure {

	/** @var Closure */
	protected $_oClosure = null;
	
	/** @var ReflectionFunction */
	protected $_oReflection = null;
	
	/** @var string */
	protected $_sSerialized = '';

	/**
	 * HandleClosure constructor.
	 *
	 * @param Closure $oFunction
	 */
	public function __construct(Closure $oFunction) {

		# Store for invoke
		$this->_oClosure = $oFunction;
		$this->_oReflection = new ReflectionFunction($oFunction);

		# Parse datas for serialize
		$this->_sSerialized = (new Serializer(new AstAnalyzer))->serialize($oFunction);

	}

	/**
	 * @return mixed
	 */
	public function __invoke() {
		return $this->_oReflection->invokeArgs(func_get_args());
	}

	/**
	 * @return array
	 */
	public function __sleep() {
		return ['_sSerialized'];
	}

	/**
	 * @return void
	 */
	public function __wakeup() {
		$this->_oClosure = (new Serializer(new AstAnalyzer))->unserialize($this->_sSerialized);
		$this->_oReflection = new ReflectionFunction($this->_oClosure);
	}

}
