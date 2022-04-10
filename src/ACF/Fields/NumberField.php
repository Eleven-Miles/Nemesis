<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class NumberField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class NumberField extends Field
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
     * Minimum number value. Defaults to ''.
     * 
     * @var int|string
     */
    public $min = '';

    /**
     * Maximum number value. Defaults to ''.
     * 
     * @var int|string
     */
    public $max = '';

    /**
     * Step size increments. Defaults to ''.
     * 
     * @var int|string
     */
    public $step = '';
}
