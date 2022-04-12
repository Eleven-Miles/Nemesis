<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class NumberField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class NumberField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'number';

    /**
     * Appears within the input. Defaults to ''.
     * 
     * @var string
     */
    public $placeholder = '';

    /**
     * Appears before the input. Defaults to ''.
     * 
     * @var string
     */
    public $prepend = '';

    /**
     * Appears after the input. Defaults to ''.
     * 
     * @var string
     */
    public $append = '';

    /**
     * Minimum number value. Defaults to ''.
     * 
     * @var int|string
     */
    public $min = '';

    /**
     * Maximum number value. Defaults to ''.
     * 
     * @var int|string
     */
    public $max = '';

    /**
     * Step size increments. Defaults to ''.
     * 
     * @var int|string
     */
    public $step = '';

    /**
     * Get the value of placeholder
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * Set the value of placeholder
     */
    public function setPlaceholder($placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    /**
     * Get the value of prepend
     */
    public function getPrepend()
    {
        return $this->prepend;
    }

    /**
     * Set the value of prepend
     */
    public function setPrepend($prepend): self
    {
        $this->prepend = $prepend;

        return $this;
    }

    /**
     * Get the value of append
     */
    public function getAppend()
    {
        return $this->append;
    }

    /**
     * Set the value of append
     */
    public function setAppend($append): self
    {
        $this->append = $append;

        return $this;
    }

    /**
     * Get the value of min
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set the value of min
     */
    public function setMin($min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get the value of max
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set the value of max
     */
    public function setMax($max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get the value of stept
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Set the value of step
     */
    public function setStep($step): self
    {
        $this->step = $step;

        return $this;
    }
}
