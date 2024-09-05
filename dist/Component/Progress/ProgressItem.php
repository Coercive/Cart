<?php
namespace Coercive\Shop\Cart\Component\Progress;

/**
 * @see \Coercive\Shop\Cart\Cart
 */
class ProgressItem
{
	private int $step = 0;

	/** @var string[] */
	private array $classNames = [];

	private string $label = '';

	private string $url = '';

	private bool $first = false;

	private bool $last = false;

	private bool $past = false;

	private bool $current = false;

	private bool $next = false;

	/**
	 * @param int $number
	 * @return $this
	 */
	public function setStep(int $number): self
	{
		$this->step = $number;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getStep(): int
	{
		return $this->step;
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
	 * @param string $label
	 * @return $this
	 */
	public function setLabel(string $label): self
	{
		$this->label = $label;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLabel(): string
	{
		return $this->label;
	}

	/**
	 * @param string $url
	 * @return $this
	 */
	public function setUrl(string $url): self
	{
		$this->url = $url;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUrl(): string
	{
		return $this->url;
	}

	/**
	 * @param bool $status [optional]
	 * @return $this
	 */
	public function setFirst(bool $status = true): self
	{
		$this->first = $status;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isFirst(): bool
	{
		return $this->first;
	}

	/**
	 * @param bool $status [optional]
	 * @return $this
	 */
	public function setLast(bool $status = true): self
	{
		$this->last = $status;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isLast(): bool
	{
		return $this->last;
	}

	/**
	 * @param bool $status [optional]
	 * @return $this
	 */
	public function setPast(bool $status = true): self
	{
		$this->past = $status;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isPast(): bool
	{
		return $this->past;
	}

	/**
	 * @param bool $status [optional]
	 * @return $this
	 */
	public function setCurrent(bool $status = true): self
	{
		$this->current = $status;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isCurrent(): bool
	{
		return $this->current;
	}

	/**
	 * @param bool $status [optional]
	 * @return $this
	 */
	public function setNext(bool $status = true): self
	{
		$this->next = $status;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isNext(): bool
	{
		return $this->next;
	}
}