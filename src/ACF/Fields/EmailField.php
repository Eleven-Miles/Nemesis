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
     * @param string $placeholder
     * @return Field
     */
    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;
        return $this;
    }
}
