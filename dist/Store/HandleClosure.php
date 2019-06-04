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
	/** @var AstAnalyzer */
	protected $analyzer = null;

	/** @var Serializer */
	protected $serializer = null;

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
		# Store for invoke
		$this->closure = $function;
		$this->reflection = new ReflectionFunction($function);

		# Parse datas for serialize
		$this->analyzer = new AstAnalyzer;
		$this->serializer = new Serializer($this->analyzer);
		$this->serialized = $this->serializer->serialize($function);
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
		$this->closure = $this->serializer->unserialize($this->serialized);
		$this->reflection = new ReflectionFunction($this->closure);
	}
}