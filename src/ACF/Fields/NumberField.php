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
     * @param string $placeholder
     * @return Field
     */
    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @param string $prepend
     * @return Field
     */
    public function setPrepend(string $prepend): self
    {
        $this->prepend = $prepend;
        return $this;
    }

    /**
     * @param string $append
     * @return Field
     */
    public function setAppend(string $append): self
    {
        $this->append = $append;
        return $this;
    }
}
