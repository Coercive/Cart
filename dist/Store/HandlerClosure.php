<?php
namespace Coercive\Shop\Cart\Store;

use Closure;
use SplFileObject;
use ReflectionFunction;
use Exception;
use InvalidArgumentException;

/**
 * @see |Coercive\Shop\Cart\Cart
 */
class HandleClosure {

	/** @var Closure */
	protected $_oClosure = null;
	
	/** @var ReflectionFunction */
	protected $_oReflection = null;
	
	/** @var string */
	protected $_sCode = '';
	
	/** @var array */
	protected $_aUsedVariables = [];

	/**
	 * HandleClosure constructor.
	 *
	 * @param $oFunction
	 */
	public function __construct($oFunction) {

		# Secure test
		if ( ! $oFunction instanceOf Closure) {
			throw new InvalidArgumentException;
		}

		# Store for invoke
		$this->_oClosure = $oFunction;
		$this->_oReflection = new ReflectionFunction($oFunction);

		# Parse datas for serialize
		$this->_sCode = $this->_fetchCode();
		$this->_aUsedVariables = $this->_fetchUsedVariables();

	}

	/**
	 * @return mixed
	 */
	public function __invoke() {
		$aArgs = func_get_args();
		return $this->_oReflection->invokeArgs($aArgs);
	}

	/**
	 * @return string
	 */
	protected function _fetchCode() {

		// Open file and seek to the first line of the closure
		$oFile = new SplFileObject($this->_oReflection->getFileName());
		$oFile->seek($this->_oReflection->getStartLine()-1);

		// Retrieve all of the lines that contain code for the closure
		$sCode = '';
		while ($oFile->key() < $this->_oReflection->getEndLine()) {
			$sCode .= $oFile->current();
			$oFile->next();
		}

		// Only keep the code defining that closure
		$iBegin = strpos($sCode, 'function');
		$iEnd = strrpos($sCode, '}');
		return (string) substr($sCode, $iBegin, $iEnd - $iBegin + 1);

	}

	/**
	 * @return array
	 */
	protected function _fetchUsedVariables() {

		// Make sure the use construct is actually used
		$iUseIndex = stripos($this->_sCode, 'use');
		if ( ! $iUseIndex) { return []; }

		// Get the names of the variables inside the use statement
		$iBegin = strpos($this->_sCode, '(', $iUseIndex) + 1;
		$iEnd = strpos($this->_sCode, ')', $iBegin);
		$aVars = explode(',', substr($this->_sCode, $iBegin, $iEnd - $iBegin));

		// Get the static variables of the function via reflection
		$aStaticVars = $this->_oReflection->getStaticVariables();

		// Only keep the variables that appeared in both sets
		$aUsedVars = [];
		foreach ($aVars as $sVar) {
			$sVar = trim($sVar, ' $&amp;');
			$aUsedVars[$sVar] = $aStaticVars[$sVar];
		}
		return $aUsedVars;

	}

	/**
	 * @return array
	 */
	public function __sleep() {
		return ['_sCode', '_aUsedVariables'];
	}

	/**
	 * @throws Exception
	 */
	public function __wakeup() {

		# Recreate serialized function
		extract($this->_aUsedVariables);
		eval('$oFunction = '.$this->_sCode.';');

		# Inject in handler
		if (isset($oFunction) && $oFunction instanceOf Closure) {
			$this->_oClosure = $oFunction;
			$this->_oReflection = new ReflectionFunction($oFunction);
		}
		else {
			throw new Exception;
		}

	}

}
