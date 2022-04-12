<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class ChoiceField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class ChoiceField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'true_false';

    /**
     * Text shown along side the checkbox.
     * 
     * @var string
     */
    public $message = 0;

    /**
     * Get the value of message
     *
     * @return string
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
}
