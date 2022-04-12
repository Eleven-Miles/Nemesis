<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class UrlField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class UrlField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'url';

    /**
     * Appears within the input. Defaults to ''.
     * 
     * @var string
     */
    public $placeholder = '';

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
}
