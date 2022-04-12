<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class SelectField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class SelectField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'select';

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

    /**
     * Get the value of choices
     */
    public function getChoices()
    {
        return $this->choices;
    }

    /**
     * Set the value of choices
     */
    public function setChoices($choices): self
    {
        $this->choices = $choices;

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

    /**
     * Get the value of ui
     */
    public function getUi()
    {
        return $this->ui;
    }

    /**
     * Set the value of ui
     */
    public function setUi($ui): self
    {
        $this->ui = $ui;

        return $this;
    }

    /**
     * Get the value of ajax
     */
    public function getAjax()
    {
        return $this->ajax;
    }

    /**
     * Set the value of ajax
     */
    public function setAjax($ajax): self
    {
        $this->ajax = $ajax;

        return $this;
    }

    /**
     * Get the value of placeholder
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * Set the value of placeholder
     */
    public function setPlaceholder($placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}
