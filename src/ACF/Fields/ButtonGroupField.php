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
     * @param array $choices
     * @return Field
     */
    public function setChoices(array $choices): self
    {
        $this->choices = $choices;
        return $this;
    }

    /**
     * @param bool $allowNull
     * @return Field
     */
    public function setAllowNull(bool $allowNull): self
    {
        $this->allow_null = $allowNull;
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
     * @param string $returnFormat
     * @return Field
     */
    public function setReturnFormat(string $returnFormat): self
    {
        $this->return_format = $returnFormat;
        return $this;
    }
}
