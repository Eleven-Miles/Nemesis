<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class RepeaterField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class RepeaterField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'repeater';

    /**
     * Defines the set of repeatable sub fields.
     * 
     * @var array
     */
    public $sub_fields = [];

    /**
     * Enables each row to be collapsed by specifying a single sub field to display. Default ''.
     * 
     * @var string
     */
    public $collapsed = '';

    /**
     * Sets a limit on how many rows of data are required.
     * 
     * @var int
     */
    public $min = 0;

    /**
     * Sets a limit on how many rows of data are allowed.
     * 
     * @var int
     */
    public $max = 0;

    /**
     * Sets a limit on how many rows of data are fetched per page.
     * 
     * @var int
     */
    public $rows_per_page = 20;

    /**
     * Defines the layout style of the appearance of the sub fields. Default 'row'.
     * Table: Sub fields are displayed in a table. Labels will appear in the table header.
     * Block: Sub fields are displayed in blocks, one after the other.
     * Row: Sub fields are displayed in a two column table. Labels will appear in the first column. 
     * 
     * @var string
     */
    public $layout = 'block';

    /**
     * The text shown in the ‘Add Row’ button. Default 'Add Row'.
     * 
     * @var string
     */
    public $button_label = 'Add Row';

    /**
     * Get the value of sub_fields
     */
    public function getSubFields()
    {
        return $this->sub_fields;
    }

    /**
     * Set the value of sub_fields
     */
    public function setSubFields($sub_fields): self
    {
        $this->sub_fields = $sub_fields;

        return $this;
    }

    /**
     * Set the value of sub_field
     */
    public function setSubField($sub_field): self
    {
        $this->sub_fields[] = $sub_field;

        return $this;
    }

    /**
     * Get the value of collapsed
     */
    public function getCollapsed()
    {
        return $this->collapsed;
    }

    /**
     * Set the value of collapsed
     */
    public function setCollapsed($collapsed): self
    {
        $this->collapsed = $collapsed;

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
     * Get the value of rows_per_page
     */
    public function getRowsPerPage()
    {
        return $this->rows_per_page;
    }

    /**
     * Set the value of rows_per_page
     */
    public function setRowsPerPage($rows_per_page): self
    {
        $this->rows_per_page = $rows_per_page;

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
