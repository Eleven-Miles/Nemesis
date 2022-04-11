<?php

namespace NanoSoup\Nemesis\ACF\Fields;

/**
 * Class OembedField
 * 
 * @package NanoSoup\Nemesis\ACF
 */
class OembedField extends Field
{
    /**
     * Type of field (text, textarea, image, etc).
     * 
     * @var string
     */
    public $type = 'oembed';

    /**
     * Specify the width of the oEmbed element. Can be overridden by CSS.
     * 
     * @var int|string
     */
    public $width = '';

    /**
     * Specify the height of the oEmbed element. Can be overridden by CSS.
     * 
     * @var int|string
     */
    public $height = '';
}
