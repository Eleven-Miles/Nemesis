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
     * @param array $choices
     * @return Field
     */
    public function setChoices(array $choices): self
    {
        $this->choices = $choices;
        return $this;
    }

    /**
     * @param string $layout
     * @return Field
     */
    public function setLayout(string $layout): self
    {
        $this->layout = $layout;
        return $this;
    }

    /**
     * @param string $allowCustom
     * @return Field
     */
    public function setAllowCustom(string $allowCustom): self
    {
        $this->allow_custom = $allowCustom;
        return $this;
    }

    /**
     * @param string $saveCustom
     * @return Field
     */
    public function setSaveCustom(string $saveCustom): self
    {
        $this->save_custom = $saveCustom;
        return $this;
    }

    /**
     * @param bool $toggle
     * @return Field
     */
    public function setToggle(bool $toggle): self
    {
        $this->toggle = $toggle;
        return $this;
    }

    /**
     * @param string $returnFormat
     * @return Field
     */
    public function setReturnFormat(string $returnFormat): self
    {
        $this->return_format = $returnFormat;
        return $this;
    }
}
