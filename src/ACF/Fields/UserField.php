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
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'user';

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

    /**
     * @param bool $allowNull
     * @return Field
     */
    public function setAllowNull(bool $allowNull): self
    {
        $this->allow_null = $allowNull;
        return $this;
    }
}
