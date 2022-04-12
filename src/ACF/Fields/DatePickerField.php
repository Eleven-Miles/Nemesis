<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class DatePickerField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class DatePickerField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'date_picker';

    /**
     * The date format that is displayed when selecting a date. Default 'd/m/Y'.
     * 
     * @var string
     */
    public $display_format = 'd/m/Y';

    /**
     * The date format that is returned when loading the value. Default 'd/m/Y'.
     * Please note that the value is always saved as Ymd (YYYYMMDD) in the database.
     * 
     * @var string
     */
    public $return_format = 'd/m/Y';

    /**
     * Specifies the day to start the week on. Default 1.
     * 
     * @var bool
     */
    public $first_day = 1;

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

    /**
     * Get the value of first_day
     */
    public function getFirstDay()
    {
        return $this->first_day;
    }

    /**
     * Set the value of first_day
     */
    public function setFirstDay($first_day): self
    {
        $this->first_day = $first_day;

        return $this;
    }
}
