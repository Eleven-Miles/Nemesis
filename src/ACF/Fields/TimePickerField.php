<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class DateTimePickerField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class DateTimePickerField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'time_picker';

    /**
     * The date format that is displayed when selecting a date. Default 'g:i a'.
     * 
     * @var string
     */
    public $display_format = 'g:i a';

    /**
     * The date format that is returned when loading the value. Default 'g:i a'.
     * 
     * @var string
     */
    public $return_format = 'g:i a';

    /**
     * Get the value of display_format
     */
    public function getDisplayFormat()
    {
        return $this->display_format;
    }

    /**
     * Set the value of display_format
     */
    public function setDisplayFormat($display_format): self
    {
        $this->display_format = $display_format;

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
