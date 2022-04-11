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
     * @param string $key
     * @return FieldGroup
     */
    public function setKey(string $key): self
    {
        $this->key = 'group_' . $key;
        return $this;
    }

    /**
     * @param string $title
     * @return FieldGroup
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param array $fields
     * @return FieldGroup
     */
    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @param array $field
     * @return FieldGroup
     */
    public function setField(array $field): self
    {
        $this->fields[] = $field;
        return $this;
    }

    /**
     * @param array $location
     * @return FieldGroup
     */
    public function setLocation(array $location): self
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @param int $menuOrder
     * @return FieldGroup
     */
    public function setMenuOrder(int $menuOrder): self
    {
        $this->menu_order = $menuOrder;
        return $this;
    }

    /**
     * @param string $position
     * @return FieldGroup
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param string $style
     * @return FieldGroup
     */
    public function setStyle(string $style): self
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @param string $labelPlacement
     * @return FieldGroup
     */
    public function setLabelPlacement(string $labelPlacement): self
    {
        $this->label_placement = $labelPlacement;
        return $this;
    }

    /**
     * @param string $instructionPlacement
     * @return FieldGroup
     */
    public function setInstructionPlacement(string $instructionPlacement): self
    {
        $this->instruction_placement = $instructionPlacement;
        return $this;
    }

    /**
     * @param string $hideOnScreen
     * @return FieldGroup
     */
    public function setHideOnScreen(string $hideOnScreen): self
    {
        $this->hide_on_screen = $hideOnScreen;
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
