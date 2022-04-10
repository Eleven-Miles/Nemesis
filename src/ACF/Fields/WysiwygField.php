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
}
