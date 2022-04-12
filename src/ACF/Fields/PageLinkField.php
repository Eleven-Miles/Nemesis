<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class PageLinkField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class PageLinkField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'page_link';

    /**
     * Specify an array of post types to filter the available choices. Defaults to ''.
     * 
     * @var mixed
     */
    public $post_type = '';

    /**
     * Specify an array of taxonomies to filter the available choices. Defaults to ''.
     * 
     * @var mixed
     */
    public $taxonomy = '';

    /**
     * Allow a null (blank) value to be selected. Defaults to 0.
     * 
     * @var bool
     */
    public $allow_null = 0;

    /**
     * Allow mulitple choices to be selected. Defaults to 0.
     * 
     * @var bool
     */
    public $multiple = 0;

    /**
     * Get the value of post_type
     */
    public function getPostType()
    {
        return $this->post_type;
    }

    /**
     * Set the value of post_type
     */
    public function setPostType($post_type): self
    {
        $this->post_type = $post_type;

        return $this;
    }

    /**
     * Get the value of taxonomy
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }

    /**
     * Set the value of taxonomy
     */
    public function setTaxonomy($taxonomy): self
    {
        $this->taxonomy = $taxonomy;

        return $this;
    }

    /**
     * Get the value of allow_null
     */
    public function getAllowNull()
    {
        return $this->allow_null;
    }

    /**
     * Set the value of allow_null
     */
    public function setAllowNull($allow_null): self
    {
        $this->allow_null = $allow_null;

        return $this;
    }

    /**
     * Get the value of multiple
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * Set the value of multiple
     */
    public function setMultiple($multiple): self
    {
        $this->multiple = $multiple;

        return $this;
    }
}
