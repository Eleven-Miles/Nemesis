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
     * Get the value of other_choice
     */
    public function getOtherChoice()
    {
        return $this->other_choice;
    }

    /**
     * Set the value of other_choice
     */
    public function setOtherChoice($other_choice): self
    {
        $this->other_choice = $other_choice;

        return $this;
    }

    /**
     * Get the value of save_other_choice
     */
    public function getSaveOtherChoice()
    {
        return $this->save_other_choice;
    }

    /**
     * Set the value of save_other_choice
     */
    public function setSaveOtherChoice($save_other_choice): self
    {
        $this->save_other_choice = $save_other_choice;

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
}
