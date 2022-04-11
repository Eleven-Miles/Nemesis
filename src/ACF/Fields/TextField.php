<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class TextField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class TextField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'text';

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
     * Restricts the character limit. Defaults to ''.
     * 
     * @var string
     */
    public $maxlength = '';

    /**
     * Makes the input readonly. Defaults to 0.
     * 
     * @var bool
     */
    public $readonly = '';

    /**
     * Makes the input disabled. Defaults to 0.
     * 
     * @var bool
     */
    public $disabled = '';

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
