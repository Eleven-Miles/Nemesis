<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Interface FieldGroupInterface
 * @package NanoSoup\Nemesis\ACF
 */
interface FieldGroupInterface
{
    /**
     * FieldGroupInterface constructor.
     */
    public function __construct();

    /**
     * Register the field group with ACF
     *
     * @return mixed
     */
    public function registerFieldGroup();
}