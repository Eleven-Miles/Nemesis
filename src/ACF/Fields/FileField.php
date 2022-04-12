<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class FileField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class FileField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'file';

    /**
     * Specify the type of value returned by get_field(). Defaults to 'array'.
	 * Choices of 'array' (File Array), 'url' (File URL) or 'id' (File ID) .
     * 
     * @var string
     */
    public $return_format = 'array';

    /**
     * Specify the file size shown when editing. Defaults to 'thumbnail'.
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
     * Specify the minimum filesize in MB required when uploading. Defaults to 0 
	 * The unit may also be included. eg. '256KB'.
     * 
     * @var int
     */
    public $min_size = 0;

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

    /**
     * Get the value of preview_size
     */
    public function getPreviewSize()
    {
        return $this->preview_size;
    }

    /**
     * Set the value of preview_size
     */
    public function setPreviewSize($preview_size): self
    {
        $this->preview_size = $preview_size;

        return $this;
    }

    /**
     * Get the value of library
     */
    public function getLibrary()
    {
        return $this->library;
    }

    /**
     * Set the value of library
     */
    public function setLibrary($library): self
    {
        $this->library = $library;

        return $this;
    }

    /**
     * Get the value of min_size
     */
    public function getMinSize()
    {
        return $this->min_size;
    }

    /**
     * Set the value of min_size
     */
    public function setMinSize($min_size): self
    {
        $this->min_size = $min_size;

        return $this;
    }

    /**
     * Get the value of max_size
     */
    public function getMaxSize()
    {
        return $this->max_size;
    }

    /**
     * Set the value of max_size
     */
    public function setMaxSize($max_size): self
    {
        $this->max_size = $max_size;

        return $this;
    }

    /**
     * Get the value of mime_types
     */
    public function getMimeTypes()
    {
        return $this->mime_types;
    }

    /**
     * Set the value of mime_types
     */
    public function setMimeTypes($mime_types): self
    {
        $this->mime_types = $mime_types;

        return $this;
    }
}
