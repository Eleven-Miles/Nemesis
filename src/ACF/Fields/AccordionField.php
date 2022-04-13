<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class AccordionField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class AccordionField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'accordion';

    /**
     * Shows the Accordion content panel as open on initial page load. Defaults to false.
     * 
     * @var bool
     */
    public $open = 0;

    /**
     * Prevents default behavior of closing sibling Accordions when one is open. Defaults to false.
     * 
     * @var bool
     */
    public $multi_expand = 0;

    /**
     * Defines an endpoint for the previous Accordion field. All fields that follow will not be appended to the Accordion’s content panel. Default 0.
     * 
     * @var bool
     */
    public $endpoint = 0;

    /**
     * Get the value of open
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * Set the value of open
     */
    public function setOpen($open): self
    {
        $this->open = $open;

        return $this;
    }

    /**
     * Get the value of multi_expand
     */
    public function getMultiExpand()
    {
        return $this->multi_expand;
    }

    /**
     * Set the value of multi_expand
     */
    public function setMultiExpand($multi_expand): self
    {
        $this->multi_expand = $multi_expand;

        return $this;
    }

    /**
     * Get the value of endpoint
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Set the value of endpoint
     */
    public function setEndpoint($endpoint): self
    {
        $this->endpoint = $endpoint;

        return $this;
    }
}
