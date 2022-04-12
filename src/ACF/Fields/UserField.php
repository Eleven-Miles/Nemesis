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
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     */
    public function setRole($role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of allow_null
     */
    public function getAllowNull()
    {
        return $this->allow_null;
    }

    /**
     * Set the value of allow_null
     */
    public function setAllowNull($allow_null): self
    {
        $this->allow_null = $allow_null;

        return $this;
    }

    /**
     * Get the value of multiple
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * Set the value of multiple
     */
    public function setMultiple($multiple): self
    {
        $this->multiple = $multiple;

        return $this;
    }
}
