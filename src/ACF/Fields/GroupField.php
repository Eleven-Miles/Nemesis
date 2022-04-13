<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class GroupField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class GroupField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'group';

    /**
     * Defines the sub fields which will appear within this group.
     * 
     * @var array
     */
    public $sub_fields = [];

    /**
     * Defines the layout style used to render the field interface. Default to 'block'.
     * Block: Sub fields are displayed in blocks, one after the other.
     * Table: Sub fields are displayed in a single row table. Labels will appear in the table header.
     * Row: Sub fields are displayed in a two column table. Labels will appear in the first column. 
     * 
     * @var string
     */
    public $layout = 'block';

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
}
