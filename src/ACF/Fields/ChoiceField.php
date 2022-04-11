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
     * @param string $message
     * @return Field
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }
}
