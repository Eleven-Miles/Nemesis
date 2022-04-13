<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class MessageField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class MessageField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'message';

    /**
     * Specify the message that will be output. Default ''.
     * 
     * @var string
     */
    public $message = '';

    /**
     * Decides how to render new lines. Detauls to 'wpautop'.
	 * Choices of 'wpautop' (Automatically add paragraphs), 'br' (Automatically add <br>) or '' (No Formatting).
     * 
     * @var string
     */
    public $new_lines = 'wpautop';

    /**
     * Descides whether the HTML should be escaped. Default 0.
     * 
     * @var bool
     */
    public $esc_html = 0;

    /**
     * Get the value of message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     */
    public function setMessage($message): self
    {
        $this->message = $message;

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
     * Get the value of esc_html
     */
    public function getEscHtml()
    {
        return $this->esc_html;
    }

    /**
     * Set the value of esc_html
     */
    public function setEscHtml($esc_html): self
    {
        $this->esc_html = $esc_html;

        return $this;
    }
}
