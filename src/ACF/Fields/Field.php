<?php

namespace NanoSoup\Nemesis\ACF\Fields;

use ReflectionClass;
use ReflectionProperty;

/**
 * Class Field
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class Field
{
    /**
     * Unique identifier to be used in dynamically generating the key.
     * 
     * @var string
     */
    protected $prefix = '';

    /**
     * Unique identifier for the field. Must begin with 'field_'.
     * 
     * @var string
     */
    public $key = '';

    /**
     * Visible when editing the field value
     * 
     * @var string
     */
    public $label = '';

    /**
     * Used to save and load data. Single word, no spaces. Underscores and dashes allowed.
     * 
     * @var string
     */
    public $name = '';

    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'text';

    /**
     * Field group key
     * 
     * @var string
     */
    public $parent = '';

    /**
     * Instructions for authors. Shown when submitting data.
     * 
     * @var string
     */
    public $instructions = '';

    /**
     * Whether or not the field value is required. Defaults to 0.
     * 
     * @var int
     */
    public $required = 0;

    /**
     * Conditionally hide or show this field based on other field's values.
     * Best to use the ACF UI and export to understand the array structure. Defaults to 0.
     * 
     * @var mixed
     */
    public $conditional_logic = 0;

    /**
     * An array of attributes given to the field element.
     * 
     * @var array
     */
    public $wrapper = [
        'width' => '',
        'class' => '',
        'id' => ''
    ];

    /**
     * A default value used by ACF if no value has yet been saved.
     * 
     * @var mixed
     */
    public $default_value = '';

    /**
     * Field constructor.
     */
    public function __construct($prefix)
    {
        $this->setPrefix($prefix);
    }

    /**
     * Creates a new field object
     */
    public static function make($prefix)
    {
        return new static($prefix);
    }

    /**
     * Get the value of prefix
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Set the value of prefix
     */
    public function setPrefix($prefix): self
    {
        $this->prefix = $prefix;

        return $this;
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
        $this->key = 'field_' . $key;

        return $this;
    }

    /**
     * Get the value of label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     */
    public function setLabel($label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of parent
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set the value of parent
     */
    public function setParent($parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get the value of instructions
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Set the value of instructions
     */
    public function setInstructions($instructions): self
    {
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get the value of required
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set the value of required
     */
    public function setRequired($required): self
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get the value of conditional_logic
     */
    public function getConditionalLogic()
    {
        return $this->conditional_logic;
    }

    /**
     * Set the value of conditional_logic
     */
    public function setConditionalLogic($conditional_logic): self
    {
        $this->conditional_logic = $conditional_logic;

        return $this;
    }

    /**
     * Get the value of wrapper
     */
    public function getWrapper()
    {
        return $this->wrapper;
    }

    /**
     * Set the value of wrapper
     */
    public function setWrapper($wrapper): self
    {
        $this->wrapper = array_merge($this->wrapper, $wrapper);

        return $this;
    }

    /**
     * Set the width value of wrapper
     */
    public function setWrapperWidth($width): self
    {
        $this->wrapper['width'] = $width;

        return $this;
    }

    /**
     * Set the class value of wrapper
     */
    public function setWrapperClass($class): self
    {
        $this->wrapper['class'] = $class;

        return $this;
    }

    /**
     * Set the id value of wrapper
     */
    public function setWrapperId($id): self
    {
        $this->wrapper['id'] = $id;

        return $this;
    }

    /**
     * Get the value of default_value
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    /**
     * Set the value of default_value
     */
    public function setDefaultValue($default_value): self
    {
        $this->default_value = $default_value;

        return $this;
    }

    /**
     * Generate name field from label
     * 
     * @param $label
     * @return string
     */
    public function generateName(string $label): string
    {
        $label = preg_replace('/[^A-Za-z0-9]+/', '_', $label);

        return strtolower($label);
    }

    /**
     * Generate a unique prefix
     * 
     * @param string $prefix
     * @param string $label
     * @return string
     */
    public function generateUniquePrefix(string $prefix, string $label): string
    {
        return md5($prefix . strtolower(str_replace(' ', '_', $label)));
    }

    /**
     * Return an ACF Field
     * 
     * @return array
     */
    public function getField(): array
    {
        $field = [];

        if (empty($this->key)) {
            $this->key = 'field_' . $this->type . '_' . $this->generateUniquePrefix($this->prefix, $this->label);
        }

        if (empty($this->name)) {
            $this->name = $this->generateName($this->label);
        }

        $reflect = new ReflectionClass(static::class);
        foreach ($reflect->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            $name = $property->getName();
            if (isset($this->$name)) {
                $field[$name] = $this->$name;
            }
        }

        return $field;
    }

    /**
     * Register an ACF Field
     * 
     * @return void
     */
    public function saveField(): void
    {
        if (function_exists('acf_add_local_field')) {
            acf_add_local_field($this->getField());
        }
    }
}
