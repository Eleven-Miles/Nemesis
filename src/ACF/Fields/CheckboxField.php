<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class CheckboxField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class CheckboxField extends Field
{
    /**
     * Array of choices where the key ('red') is used as value and the value ('Red') is used as label.
     * 
     * @var array
     */
    public $choices = [];

    /**
     * Specify the layout of the checkbox inputs. Defaults to 'vertical'.
	 * Choices of 'vertical' or 'horizontal'
     * 
     * @var string
     */
    public $layout = 'vertical';

    /**
     * Whether to allow custom options to be added by the user. Default false.
     * 
     * @var bool
     */
    public $allow_custom = false;

    /**
     * Whether to allow custom options to be saved to the field choices. Default false.
     * 
     * @var bool
     */
    public $save_custom = false;

    /**
     * Adds a "Toggle all" checkbox to the list. Default false.
     * 
     * @var bool
     */
    public $toggle = false;

    /**
     * Specify how the value is formatted when loaded. Default 'value'.
	 * Choices of 'value', 'label' or 'array'.
     * 
     * @var string
     */
    public $return_format = 'value';
}
