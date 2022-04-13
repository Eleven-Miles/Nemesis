<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class TabField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class TabField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'tab';

    /**
     * Changes the tab style from a top aligned row to a left aligned sidebar. 
     * The left aligned option will be ignored if the field group appears in a table element (editing a user, attachment, taxonomy or field group label setting on left).
     * Default 'top'.
     * 
     * @var string
     */
    public $placement = 'top';

    /**
     * Defines an endpoint for the previous Tab group. 
     * When used in combination with an empty field label, this field can be used as a tab stopper. Default 0.
     * 
     * @var bool
     */
    public $endpoint = 0;

    /**
     * Get the value of placement
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * Set the value of placement
     */
    public function setPlacement($placement): self
    {
        $this->placement = $placement;

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
