<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class ButtonGroupField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class ButtonGroupField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'button_group';

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
     * Specify the layout of the checkbox inputs. Defaults to 'horizontal'.
	 * Choices of 'vertical' or 'horizontal'
     * 
     * @var string
     */
    public $layout = 'horizontal';

    /**
     * Specify how the value is formatted when loaded. Default 'value'.
	 * Choices of 'value', 'label' or 'both'.
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
