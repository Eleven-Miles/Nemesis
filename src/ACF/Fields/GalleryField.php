<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class ImageField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class GalleryField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'gallery';

    /**
     * Specify the minimum attachments required to be selected. Defaults to 0.
     * 
     * @var int
     */
    public $min = 0;

    /**
     * Specify the maximum attachments allowed to be selected. Defaults to 0.
     * 
     * @var int
     */
    public $max = 0;

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
     * Get the value of min_width
     */
    public function getMinWidth()
    {
        return $this->min_width;
    }

    /**
     * Set the value of min_width
     */
    public function setMinWidth($min_width): self
    {
        $this->min_width = $min_width;

        return $this;
    }

    /**
     * Get the value of min_height
     */
    public function getMinHeight()
    {
        return $this->min_height;
    }

    /**
     * Set the value of min_height
     */
    public function setMinHeight($min_height): self
    {
        $this->min_height = $min_height;

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
     * Get the value of max_width
     */
    public function getMaxWidth()
    {
        return $this->max_width;
    }

    /**
     * Set the value of max_width
     */
    public function setMaxWidth($max_width): self
    {
        $this->max_width = $max_width;

        return $this;
    }

    /**
     * Get the value of max_height
     */
    public function getMaxHeight()
    {
        return $this->max_height;
    }

    /**
     * Set the value of max_height
     */
    public function setMaxHeight($max_height): self
    {
        $this->max_height = $max_height;

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
