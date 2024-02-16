<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class CloneField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class CloneField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'clone';

    /**
     * Defines the set of repeatable sub fields.
     * 
     * @var array
     */
    public $sub_fields = [];

    /**
     * Specify how to display the cloned fields.
     * Seamless – Completely replaces the Clone field with selected fields. Very useful to re-use fields within a Repeater or Flexible Content field.
     * Group – Displays the selected fields within a group. Very useful to re-use an existing group or 'modules' such as a group containing "button" settings (used in following examples).
     * 
     * @var string
     */
    public $display = 'seamless';

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
     * This setting will modify all selected fields labels and prefix the current Clone field’s label.
     * Very useful when using the "Seamless" display.
     * You could name your Clone field "Hero" and have it prefixed to all selected fields like "Hero Button Text," "Hero Button URL," etc.
     * 
     * @var string
     */
    public $prefix_label = '';

    /**
     * Similar to the above, but will modify the field’s name. The name is used to save/load values.
     * Very useful when using the "Group" display.
     * You could clone a group multiple times on 1 edit screen, but have them save data with different names, e.g.,: "hero_button_text," "welcome_button_text," etc.
     * 
     * @var string
     */
    public $prefix_name = '';

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
     * Get the value of display
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set the value of display
     */
    public function setDisplay($display): self
    {
        $this->display = $display;

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
