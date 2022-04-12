<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class WysiwygField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class WysiwygField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'wysiwyg';

    /**
     * Specify which tabs are available. Defaults to 'all'.
	 * Choices of 'all' (Visual & Text), 'visual' (Visual Only) or text (Text Only).
     * 
     * @var string
     */
    public $tabs = 'all';

    /**
     * Specify the editor's toolbar. Defaults to 'full'.
	 * Choices of 'full' (Full), 'basic' (Basic) or a custom toolbar (https://www.advancedcustomfields.com/resources/customize-the-wysiwyg-toolbars/).
     * 
     * @var string
     */
    public $toolbar = 'full';

    /**
     * Show the media upload button. Defaults to 1.
     * 
     * @var bool
     */
    public $media_upload = 1;

    /**
     * Get the value of tabs
     */
    public function getTabs()
    {
        return $this->tabs;
    }

    /**
     * Set the value of tabs
     */
    public function setTabs($tabs): self
    {
        $this->tabs = $tabs;

        return $this;
    }

    /**
     * Get the value of toolbar
     */
    public function getToolbar()
    {
        return $this->toolbar;
    }

    /**
     * Set the value of toolbar
     */
    public function setToolbar($toolbar): self
    {
        $this->toolbar = $toolbar;

        return $this;
    }

    /**
     * Get the value of media_upload
     */
    public function getMediaUpload()
    {
        return $this->media_upload;
    }

    /**
     * Set the value of media_upload
     */
    public function setMediaUpload($media_upload): self
    {
        $this->media_upload = $media_upload;

        return $this;
    }
}
