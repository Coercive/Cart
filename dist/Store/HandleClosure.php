<?php
namespace Coercive\Shop\Cart\Store;

use Closure;
use Exception;
use ReflectionFunction;
use SuperClosure\Serializer;
use SuperClosure\Analyzer\AstAnalyzer;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class HandleClosure
{
	/** @var Closure */
	protected $closure = null;
	
	/** @var ReflectionFunction */
	protected $reflection = null;
	
	/** @var string */
	protected $serialized = '';

	/**
	 * HandleClosure constructor.
	 *
	 * @param Closure $function
	 * @return void
	 * @throws Exception
	 */
	public function __construct(Closure $function)
	{
		$this->closure = $function;
		$this->reflection = new ReflectionFunction($function);
		$this->serialized = (new Serializer(new AstAnalyzer))->serialize($function);
	}

	/**
	 * @return mixed
	 */
	public function __invoke()
	{
		return $this->reflection->invokeArgs(func_get_args());
	}

	/**
	 * @return array
	 */
	public function __sleep()
	{
		return ['serialized'];
	}

	/**
	 * @return void
	 * @throws Exception
	 */
	public function __wakeup()
	{
		$this->closure = (new Serializer(new AstAnalyzer))->unserialize($this->serialized);
		$this->reflection = new ReflectionFunction($this->closure);
	}
}