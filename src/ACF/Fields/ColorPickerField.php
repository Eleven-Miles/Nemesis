<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class ColorPickerField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class ColorPickerField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'color_picker';

    /**
     * Enable transparency control on the color picker.
     * If enabled the Return format options switch to RGBA string or RGBA array.
     * 
     * @var bool
     */
    public $enable_opacity = false;

    /**
     * Specify how the value is formatted when loaded. Default 'value'.
	 * Choices of 'string', or 'array'.
     * 
     * @var string
     */
    public $return_format = 'string';

    /**
     * Get the value of enable_opacity
     */
    public function getEnableOpacity()
    {
        return $this->enable_opacity;
    }

    /**
     * Set the value of enable_opacity
     */
    public function setEnableOpacity($enable_opacity): self
    {
        $this->enable_opacity = $enable_opacity;

        return $this;
    }

    /**
     * Get the value of return_format
     */
    public function getReturnFormat()
    {
        return $this->return_format;
    }

    /**
     * Set the value of return_format
     */
    public function setReturnFormat($return_format): self
    {
        $this->return_format = $return_format;

        return $this;
    }
}
