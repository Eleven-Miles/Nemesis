<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class UserField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class UserField extends Field
{
    /**
     * Array of roles to limit the users available for selection.
     * 
     * @var array
     */
    public $role = [];

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
}
