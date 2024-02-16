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
    public $readonly = 0;

    /**
     * Makes the input disabled. Defaults to 0.
     * 
     * @var bool
     */
    public $disabled = 0;

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

    /**
     * Get the value of maxlength
     */
    public function getMaxlength()
    {
        return $this->maxlength;
    }

    /**
     * Set the value of maxlength
     */
    public function setMaxlength($maxlength): self
    {
        $this->maxlength = $maxlength;

        return $this;
    }

    /**
     * Get the value of rows
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Set the value of rows
     */
    public function setRows($rows): self
    {
        $this->rows = $rows;

        return $this;
    }

    /**
     * Get the value of new_lines
     */
    public function getNewLines()
    {
        return $this->new_lines;
    }

    /**
     * Set the value of new_lines
     */
    public function setNewLines($new_lines): self
    {
        $this->new_lines = $new_lines;

        return $this;
    }

    /**
     * Get the value of readonly
     */
    public function getReadonly()
    {
        return $this->readonly;
    }

    /**
     * Set the value of readonly
     */
    public function setReadonly($readonly): self
    {
        $this->readonly = $readonly;

        return $this;
    }

    /**
     * Get the value of disabled
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set the value of disabled
     */
    public function setDisabled($disabled): self
    {
        $this->disabled = $disabled;

        return $this;
    }
}
