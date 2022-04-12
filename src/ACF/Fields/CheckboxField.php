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
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'checkbox';

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
     * Get the value of layout
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set the value of layout
     */
    public function setLayout($layout): self
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get the value of allow_custom
     */
    public function getAllowCustom()
    {
        return $this->allow_custom;
    }

    /**
     * Set the value of allow_custom
     */
    public function setAllowCustom($allow_custom): self
    {
        $this->allow_custom = $allow_custom;

        return $this;
    }

    /**
     * Get the value of save_custom
     */
    public function getSaveCustom()
    {
        return $this->save_custom;
    }

    /**
     * Set the value of save_custom
     */
    public function setSaveCustom($save_custom): self
    {
        $this->save_custom = $save_custom;

        return $this;
    }

    /**
     * Get the value of toggle
     */
    public function getToggle()
    {
        return $this->toggle;
    }

    /**
     * Set the value of toggle
     */
    public function setToggle($toggle): self
    {
        $this->toggle = $toggle;

        return $this;
    }

    /**
     * Get the value of return_format
     */
    public function getReturnFormat()
    {
        return $this->return_format;
    }

    /**
     * Set the value of return_format
     */
    public function setReturnFormat($return_format): self
    {
        $this->return_format = $return_format;

        return $this;
    }
}
