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
}
