<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class class TextAreaField extends Field

 * 
 * @package NanoSoup\Nemesis\ACF
 */
class TextAreaField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'textarea';

    /**
     * Appears within the input. Defaults to ''.
     * 
     * @var string
     */
    public $placeholder = '';

    /**
     * Restricts the character limit. Defaults to ''.
     * 
     * @var string
     */
    public $maxlength = '';

    /**
     * Restricts the number of rows and height. Defaults to ''.
     * 
     * @var int|string
     */
    public $rows = '';

    /**
     * (new_lines) Decides how to render new lines. Detauls to 'wpautop'.
	 * Choices of 'wpautop' (Automatically add paragraphs), 'br' (Automatically add <br>) or '' (No Formatting).
     * 
     * @var bool
     */
    public $new_lines = '';

    /**
     * Makes the input readonly. Defaults to 0.
     * 
     * @var bool
     */
    public $readonly = '';

    /**
     * Makes the input disabled. Defaults to 0.
     * 
     * @var bool
     */
    public $disabled = '';

    /**
     * @param string $placeholder
     * @return Field
     */
    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;
        return $this;
    }
}
