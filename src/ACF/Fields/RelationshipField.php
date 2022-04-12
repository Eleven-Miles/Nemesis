<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class RelationshipField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class RelationshipField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'relationship';

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
     * Specify the available filters used to search for posts.
	 * Choices of 'search' (Search input), 'post_type' (Post type select) and 'taxonomy' (Taxonomy select).
     * 
     * @var array
     */
	public $filters = [
        'search', 
        'post_type', 
        'taxonomy'
    ];

    /**
     * Specify the visual elements for each post. Choices of 'featured_image' (Featured image icon).
     * 
     * @var array
     */
    public $elements = [];

    /**
     * Specify the minimum posts required to be selected. Defaults to 0.
     * 
     * @var int
     */
    public $min = 0;

    /**
     * pecify the maximum posts allowed to be selected. Defaults to 0.
     * 
     * @var int
     */
    public $max = 0;

    /**
     * Specify the type of value returned by get_field(). Defaults to 'object'.
	 * Choices of 'object' (Post object) or 'id' (Post ID).
     * 
     * @var string
     */
    public $return_format = 'object';

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
	 * Get the value of filters
	 */
	public function getFilters()
	{
		return $this->filters;
	}

	/**
	 * Set the value of filters
	 */
	public function setFilters($filters): self
	{
		$this->filters = $filters;

		return $this;
	}

    /**
     * Get the value of elements
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * Set the value of elements
     */
    public function setElements($elements): self
    {
        $this->elements = $elements;

        return $this;
    }

    /**
     * Get the value of min
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set the value of min
     */
    public function setMin($min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get the value of max
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set the value of max
     */
    public function setMax($max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get the value of return_format
     */
    public function getReturnFormat()
    {
        return $this->return_format;
    }

    /**
     * Set the value of return_format
     */
    public function setReturnFormat($return_format): self
    {
        $this->return_format = $return_format;

        return $this;
    }
}
