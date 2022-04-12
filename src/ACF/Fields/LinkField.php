<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class LinkField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class LinkField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'link';

    /**
     * Specify how the value is formatted when loaded. Default 'value'.
	 * Choices of 'value', 'label' or 'array'.
     * 
     * @var string
     */
    public $return_value = 'array';

    /**
     * Get the value of return_value
     */
    public function getReturnValue()
    {
        return $this->return_value;
    }

    /**
     * Set the value of return_value
     */
    public function setReturnValue($return_value): self
    {
        $this->return_value = $return_value;

        return $this;
    }
}
