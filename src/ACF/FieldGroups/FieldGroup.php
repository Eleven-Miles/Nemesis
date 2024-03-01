<?php

namespace NanoSoup\Nemesis\ACF\FieldGroups;

use ReflectionClass;
use ReflectionProperty;

/**
 * Class FieldGroup 
 * @package NanoSoup\Nemesis\ACF
 */
class FieldGroup
{
    /**
     * Unique identifier for field group. Must begin with 'group_'.
     * 
     * @var string
     */
    public $key = '';

     /**
     * Visible in metabox handle.
     * 
     * @var string
     */
    public $title = '';

    /**
     * An array of fields
     * 
     * @var array
     */
    public $fields = [];

    /**
     * An array containing 'rule groups' where each 'rule group' is an array containing 'rules'.
     * Each group is considered an 'or', and each rule is considered an 'and'.
     * 
     * @var array
     */
    public $location = [
        [
            [
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post'
            ]
        ]
    ];

    /**
     * Field groups are shown in order from lowest to highest. Defaults to 0.
     * 
     * @var int
     */
    public $menu_order = 0;

    /**
     * Determines the position on the edit screen. Defaults to normal. 
     * Choices of 'acf_after_title', 'normal' or 'side'.
     * 
     * @var string
     */
    public $position = 'normal';

    /**
     * Determines the metabox style. Defaults to 'default'. Choices of 'default' or 'seamless'.
     * 
     * @var string
     */
    public $style = 'default';

    /**
     * Determines where field labels are places in relation to fields. Defaults to 'top'.
     * Choices of 'top' (Above fields) or 'left' (Beside fields).
     * 
     * @var string
     */
    public $label_placement = 'top';

    /**
     * Determines where field instructions are places in relation to fields. Defaults to 'label'.
     * Choices of 'label' (Below labels) or 'field' (Below fields).
     * 
     * @var string
     */
    public $instruction_placement = 'label';

     /**
      * An array of elements to hide on the screen.

     * @var mixed
     */
    public $hide_on_screen = '';

    /**
     * FieldGroup constructor.
     */
    public function __construct()
    {}

    /**
     * Creates a new field group object
     */
    public static function make()
    {
        return new static();
    }

    /**
     * Get the value of key
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set the value of key
     */
    public function setKey($key): self
    {
        $this->key = 'group_' . $key;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of fields
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set the value of fields
     */
    public function setFields($fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Set the value of field
     */
    public function setField($field): self
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * Get the value of location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     */
    public function setLocation($location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of menu_order
     */
    public function getMenuOrder()
    {
        return $this->menu_order;
    }

    /**
     * Set the value of menu_order
     */
    public function setMenuOrder($menu_order): self
    {
        $this->menu_order = $menu_order;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition($position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of style
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set the value of style
     */
    public function setStyle($style): self
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get the value of label_placement
     */
    public function getLabelPlacement()
    {
        return $this->label_placement;
    }

    /**
     * Set the value of label_placement
     */
    public function setLabelPlacement($label_placement): self
    {
        $this->label_placement = $label_placement;

        return $this;
    }

    /**
     * Get the value of instruction_placement
     */
    public function getInstructionPlacement()
    {
        return $this->instruction_placement;
    }

    /**
     * Set the value of instruction_placement
     */
    public function setInstructionPlacement($instruction_placement): self
    {
        $this->instruction_placement = $instruction_placement;

        return $this;
    }

    /**
     * Get the value of hide_on_screen
     */
    public function getHideOnScreen()
    {
        return $this->hide_on_screen;
    }

    /**
     * Set the value of hide_on_screen
     */
    public function setHideOnScreen($hide_on_screen): self
    {
        $this->hide_on_screen = $hide_on_screen;

        return $this;
    }

    /**
     * Generate name field from title
     * 
     * @param $title
     * @return string
     */
    public function generateName(string $title): string
    {
        $title = preg_replace('/[^A-Za-z0-9]+/', '_', $title);
        return strtolower($title);
    }

    /**
     * Return an ACF Field Group
     * 
     * @return array
     */
    public function getFieldGroup(): array
    {
        $fieldGroup = [];

        if (empty($this->key)) {
            $this->key = 'group_' .  $this->generateName($this->title);
        }

        $reflect = new ReflectionClass(static::class);
        foreach ($reflect->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            $name = $property->getName();
            if (isset($this->$name)) {
                $fieldGroup[$name] = $this->$name;
            }
        }

        return $fieldGroup;
    }

    /**
     * Register an ACF Field Group
     * 
     * @return void
     */
    public function saveFieldGroup(): void
    {
        if (function_exists('acf_add_local_field_group')) {
            acf_add_local_field_group($this->getFieldGroup());
        }
    }
}
