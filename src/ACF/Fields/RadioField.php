<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class RadioField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class RadioField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'radio';

    /**
     * Array of choices where the key ('red') is used as value and the value ('Red') is used as label.
     * 
     * @var array
     */
    public $choices = [];

    /**
     * Allow a custom choice to be entered via a text input.
     * 
     * @var bool
     */
    public $other_choice = 0;

    /**
     * Allow the custom value to be added to this field's choices. Defaults to 0.
	 * Will not work with PHP registered fields, only DB fields.
     * 
     * @var bool
     */
    public $save_other_choice = 0;

    /**
     * Specify the layout of the checkbox inputs. Defaults to 'vertical'.
	 * Choices of 'vertical' or 'horizontal'.
     * 
     * @var string
     */
    public $layout = 0;

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
}
