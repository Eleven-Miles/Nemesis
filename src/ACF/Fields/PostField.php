<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class PostField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class PostField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'post_object';

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
     * Specify the type of value returned by get_field(). Defaults to 'object'.
	 * Choices of 'object' (Post object) or 'id' (Post ID).
     * 
     * @var string
     */
    public $return_format = 'object';

    /**
     * @param bool $allowNull
     * @return Field
     */
    public function setAllowNull(bool $allowNull): self
    {
        $this->allow_null = $allowNull;
        return $this;
    }

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
