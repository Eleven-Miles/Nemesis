<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class TextField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class TextField extends Field
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

    /**
     * Restricts the character limit. Defaults to ''.
     * 
     * @var string
     */
    public $maxlength = '';

    /**
     * Makes the input readonly. Defaults to 0.
     * 
     * @var bool
     */
    public $readonly = '';

    /**
     * Makes the input disabled. Defaults to 0.
     * 
     * @var bool
     */
    public $disabled = '';
}
