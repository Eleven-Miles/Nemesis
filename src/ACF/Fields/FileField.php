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
     * @param string $returnFormat
     * @return Field
     */
    public function setReturnFormat(string $returnFormat): self
    {
        $this->return_format = $returnFormat;
        return $this;
    }

    /**
     * @param string $previewSize
     * @return Field
     */
    public function setPreviewSize(string $previewSize): self
    {
        $this->preview_size = $previewSize;
        return $this;
    }

    /**
     * @param string $library
     * @return Field
     */
    public function setLibrary(string $library): self
    {
        $this->library = $library;
        return $this;
    }

    /**
     * @param int $minSize
     * @return Field
     */
    public function setMinSize(int $minSize): self
    {
        $this->min_size = $minSize;
        return $this;
    }

    /**
     * @param int $maxSize
     * @return Field
     */
    public function setMaxSize(int $maxSize): self
    {
        $this->max_size = $maxSize;
        return $this;
    }

    /**
     * @param int $mimeTypes
     * @return Field
     */
    public function setMimeTypes(int $mimeTypes): self
    {
        $this->mime_types = $mimeTypes;
        return $this;
    }
}