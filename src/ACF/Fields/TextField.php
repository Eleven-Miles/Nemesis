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
    public $readonly = 0;

    /**
     * Makes the input disabled. Defaults to 0.
     * 
     * @var bool
     */
    public $disabled = 0;

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
     * Get the value of maxlength
     */
    public function getMaxlength()
    {
        return $this->maxlength;
    }

    /**
     * Set the value of maxlength
     */
    public function setMaxlength($maxlength): self
    {
        $this->maxlength = $maxlength;

        return $this;
    }

    /**
     * Get the value of readonly
     */
    public function getReadonly()
    {
        return $this->readonly;
    }

    /**
     * Set the value of readonly
     */
    public function setReadonly($readonly): self
    {
        $this->readonly = $readonly;

        return $this;
    }

    /**
     * Get the value of disabled
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set the value of disabled
     */
    public function setDisabled($disabled): self
    {
        $this->disabled = $disabled;

        return $this;
    }
}
