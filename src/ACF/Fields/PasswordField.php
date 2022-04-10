<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class PasswordField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class PasswordField extends Field
{
    /**
     * Appears within the input. Defaults to ''.
     * 
     * @var string
     */
    public $placeholder = '';

    /**
     * Appears before the input. Defaults to ''.
     * 
     * @var string
     */
    public $prepend = '';

    /**
     * Appears after the input. Defaults to ''.
     * 
     * @var string
     */
    public $append = '';
}
