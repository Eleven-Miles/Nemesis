<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class PasswordField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class PasswordField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'password';

    /**
     * Appears within the input. Defaults to ''.
     * 
     * @var string
     */
    public $placeholder = '';

    /**
     * Appears before the input. Defaults to ''.
     * 
     * @var string
     */
    public $prepend = '';

    /**
     * Appears after the input. Defaults to ''.
     * 
     * @var string
     */
    public $append = '';

    /**
     * @param string $placeholder
     * @return Field
     */
    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @param string $prepend
     * @return Field
     */
    public function setPrepend(string $prepend): self
    {
        $this->prepend = $prepend;
        return $this;
    }

    /**
     * @param string $append
     * @return Field
     */
    public function setAppend(string $append): self
    {
        $this->append = $append;
        return $this;
    }
}
