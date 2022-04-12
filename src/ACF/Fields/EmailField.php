<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class EmailField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class EmailField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'email';

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
}
