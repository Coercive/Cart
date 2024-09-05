<?php
namespace Coercive\Shop\Cart\Component\Progress;

/**
 * @see \Coercive\Shop\Cart\Cart
 */
class ProgressBar
{
	/** @var ProgressItem[] */
	private array $items = [];

	private int $current = 0;

	private int $progress = 0;

	/** @var string[] */
	private array $classNames = [];

	private string $classForFirstAction = 'first-action';

	private string $classForLastAction = 'last-action';

	private string $classForPastAction = 'past-action';

	private string $classForCurrentAction = 'current-action';

	private string $classForNextAction = 'next-action';

	private bool $processed = false;

	/**
	 * @return void
	 */
	private function process()
	{
		if($this->processed) {
			return;
		}
		$this->processed = true;

		$nb = count($this->items); $i= 0;
		foreach ($this->items as $item) {

			$i++;

			if($i === 1) {
				$item
					->addClass($this->classForFirstAction)
					->setFirst();
			}

			if($i === $nb) {
				$item
					->addClass($this->classForLastAction)
					->setLast();
			}

			if($item->getStep() < $this->current) {
				$item
					->addClass($this->classForPastAction)
					->setPast();
			}
			elseif($item->getStep() > $this->current) {
				$item
					->addClass($this->classForNextAction)
					->setNext();
			}
			else {
				$item
					->addClass($this->classForCurrentAction)
					->setCurrent();
			}
		}
	}

	/**
	 * @param ProgressItem $item
	 * @return $this
	 */
	public function addItem(ProgressItem $item): self
	{
		$this->items[$item->getStep()] = $item;
		return $this;
	}

	/**
	 * @param int $step
	 * @param string $class
	 * @param string $label
	 * @param string $url
	 * @return $this
	 */
	public function newItem(int $step, string $class, string $label, string $url): self
	{
		return $this->addItem(
			(new ProgressItem)
				->setStep($step)
				->addClass($class)
				->setLabel($label)
				->setUrl($url)
		);
	}

	/**
	 * @param bool $process [optional]
	 * @return ProgressItem[]
	 */
	public function getItems(bool $process = true): array
	{
		if($process) {
			$this->process();
		}
		return $this->items;
	}

	/**
	 * @param int $number
	 * @return $this
	 */
	public function setCurrent(int $number): self
	{
		$this->current = $number;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCurrent(): int
	{
		return $this->current;
	}

	/**
	 * @param int $number
	 * @return $this
	 */
	public function setProgress(int $number): self
	{
		$this->progress = $number;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getProgress(): int
	{
		return $this->progress;
	}

	/**
	 * @param string $name
	 * @return $this
	 */
	public function addClass(string $name): self
	{
		$this->classNames[$name] = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getClassNames(): string
	{
		return implode(' ', $this->classNames);
	}

	/**
	 * @param string $classname
	 * @return $this
	 */
	public function setClassForFirstAction(string $classname): self
	{
		$this->classForFirstAction = $classname;
		return $this;
	}

	/**
	 * @param string $classname
	 * @return $this
	 */
	public function setClassForLastAction(string $classname): self
	{
		$this->classForLastAction = $classname;
		return $this;
	}

	/**
	 * @param string $classname
	 * @return $this
	 */
	public function setClassForPastAction(string $classname): self
	{
		$this->classForPastAction = $classname;
		return $this;
	}

	/**
	 * @param string $classname
	 * @return $this
	 */
	public function setClassForCurrentAction(string $classname): self
	{
		$this->classForCurrentAction = $classname;
		return $this;
	}

	/**
	 * @param string $classname
	 * @return $this
	 */
	public function setClassForNextAction(string $classname): self
	{
		$this->classForNextAction = $classname;
		return $this;
	}
}