<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class Field
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class Field
{
    /**
     * Unique identifier for the field. Must begin with 'field_'
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
     * Used to save and load data. Single word, no spaces. Underscores and dashes allowed
     * 
     * @var string
     */
    public $name = '';

    /**
     * Type of field (text, textarea, image, etc)
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
     * Instructions for authors. Shown when submitting data
     * 
     * @var string
     */
    public $instructions = '';

    /**
     * Whether or not the field value is required. Defaults to 0
     * 
     * @var int
     */
    public $required = 0;

    /**
     * Conditionally hide or show this field based on other field's values.
     * Best to use the ACF UI and export to understand the array structure. Defaults to 0
     * 
     * @var mixed
     */
    public $conditionalLogic = 0;

    /**
     * An array of attributes given to the field element
     * 
     * @var array
     */
    public $wrapper = [
        'width' => '',
        'class' => '',
        'id' => ''
    ];

    /**
     * A default value used by ACF if no value has yet been saved
     * 
     * @var mixed
     */
    public $defaultValue = '';

    /**
     * Field constructor.
     */
    public function __construct()
    {}

    /**
     * @param string $key
     * @return Field
     */
    public function setKey(string $key): self
    {
        $this->key = 'field_' . $key . '_' . $this->generateUniquePrefix($key, $this->label);
        return $this;
    }

    /**
     * @param string $label
     * @return Field
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @param string $name
     * @return Field
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $type
     * @return Field
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $parent
     * @return Field
     */
    public function setParent(string $parent): self
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @param string $instructions
     * @return Field
     */
    public function setInstructions(string $instructions): self
    {
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * @param int $required
     * @return Field
     */
    public function setRequired(int $required): self
    {
        $this->required = $required;
        return $this;
    }

    /**
     * @param mixed $conditionalLogic
     * @return Field
     */
    public function setConditionalLogic($conditionalLogic): self
    {
        $this->conditionalLogic = $conditionalLogic;
        return $this;
    }

    /**
     * @param string $width
     * @param string $class
     * @param string $id
     * @return Field
     */
    public function setWrapper(string $width, string $class, string $id): self
    {
        $this->wrapper = [
            'width' => $width,
            'class' => $class,
            'id' => $id
        ];
        return $this;
    }

    /**
     * @param string $defaultValue
     * @return Field
     */
    public function setDefaultValue(string $defaultValue): self
    {
        $this->defaultValue = $defaultValue;
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
        $field = [
            'key' => $this->key,
            'label' => $this->label,
            'name' => !empty($this->name) ? $this->name : $this->generateName($this->label),
            'type' => $this->type,
            'instructions' => $this->instructions,
            'required' => $this->required,
            'conditional_logic' => $this->conditionalLogic,
            'wrapper' => $this->wrapper,
            'default_value' => $this->defaultValue
        ];

        if (!empty($this->parent)) {
            $field['parent'] = $this->parent;
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
