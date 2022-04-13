<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class FlexibleContentField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class FlexibleContentField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'flexible_content';

    /**
     * Defines the layouts available when editing content.
     * Each layout contains Label, Name, Limit, Display and Field settings.
     * 
     * @var array
     */
    public $layouts = [];

    /**
     * Sets a limit on how many layouts are required.
     * 
     * @var int
     */
    public $min = 0;

    /**
     * Sets a limit on how many layouts are allowed.
     * 
     * @var int
     */
    public $max = 0;

    /**
     * Defines the layout style of the appearance of the sub fields. Default 'row'.
     * Table: Sub fields are displayed in a table. Labels will appear in the table header.
     * Block: Sub fields are displayed in blocks, one after the other.
     * Row: Sub fields are displayed in a two column table. Labels will appear in the first column. 
     * 
     * @var string
     */
    public $layout = 'row';

    /**
     * The text shown in the ‘Add Row’ button. Default 'Add Row'.
     * 
     * @var string
     */
    public $button_label = 'Add Row';

    /**
     * Get the value of layouts
     */
    public function getLayouts()
    {
        return $this->layouts;
    }

    /**
     * Set the value of layouts
     */
    public function setLayouts($layouts): self
    {
        $this->layouts = $layouts;

        return $this;
    }

    /**
     * Get the value of min
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set the value of min
     */
    public function setMin($min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get the value of max
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set the value of max
     */
    public function setMax($max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get the value of layout
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set the value of layout
     */
    public function setLayout($layout): self
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get the value of button_label
     */
    public function getButtonLabel()
    {
        return $this->button_label;
    }

    /**
     * Set the value of button_label
     */
    public function setButtonLabel($button_label): self
    {
        $this->button_label = $button_label;

        return $this;
    }
}
