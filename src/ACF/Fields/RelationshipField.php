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
     * @param string $returnFormat
     * @return Field
     */
    public function setReturnFormat(string $returnFormat): self
    {
        $this->return_format = $returnFormat;
        return $this;
    }
}
