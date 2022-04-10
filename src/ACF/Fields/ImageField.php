<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class ImageField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class ImageField extends Field
{
    /**
     * Specify the type of value returned by get_field(). Defaults to 'array'.
	 * Choices of 'array' (Image Array), 'url' (Image URL) or 'id' (Image ID).
     * 
     * @var string
     */
    public $return_format = 'array';

    /**
     * Specify the image size shown when editing. Defaults to 'thumbnail'.
     * 
     * @var string
     */
    public $preview_size = 'thumbnail';

    /**
     * Restrict the image library. Defaults to 'all'.
	 * Choices of 'all' (All Images) or 'uploadedTo' (Uploaded to post).
     * 
     * @var string
     */
    public $library = 'all';

    /**
     * Specify the minimum width in px required when uploading. Defaults to 0.
     * 
     * @var int
     */
    public $min_width = 0;

    /**
     * Specify the minimum height in px required when uploading. Defaults to 0.
     * 
     * @var int
     */
    public $min_height = 0;

    /**
     * Specify the minimum filesize in MB required when uploading. Defaults to 0 
	 * The unit may also be included. eg. '256KB'.
     * 
     * @var int
     */
    public $min_size = 0;

    /**
     * Specify the maximum width in px allowed when uploading. Defaults to 0.
     * 
     * @var int
     */
    public $max_width = 0;

    /**
     * Specify the maximum height in px allowed when uploading. Defaults to 0.
     * 
     * @var int
     */
    public $max_height = 0;

    /**
     * Specify the maximum filesize in MB in px allowed when uploading. Defaults to 0
	 * The unit may also be included. eg. '256KB'.
     * 
     * @var int
     */
    public $max_size = 0;

    /**
     * Comma separated list of file type extensions allowed when uploading. Defaults to ''.
     * 
     * @var string
     */
    public $mime_types = '';
}
