<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class ChoiceField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class ChoiceField extends Field
{
    /**
     * Array of choices where the key ('red') is used as value and the value ('Red') is used as label.
     * 
     * @var array
     */
    public $choices = [];

    /**
     * Allow a null (blank) value to be selected. Defaults to 0.
     * 
     * @var bool
     */
    public $allow_null = 0;

    /**
     * Allow mulitple choices to be selected. Defaults to 0.
     * 
     * @var bool
     */
    public $multiple = 0;

    /**
     * Use the select2 interfacte. Defaults to 0.
     * 
     * @var bool
     */
    public $ui = 0;

    /**
     * Load choices via AJAX. The ui setting must also be true for this to work. Defaults to 0.
     * 
     * @var bool
     */
    public $ajax = 0;

    /**
     * Appears within the select2 input. Defaults to ''.
     * 
     * @var string
     */
    public $placeholder = '';
}
