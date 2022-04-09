<?php

namespace NanoSoup\Nemesis\ACF\Blocks;

use ReflectionClass;
use ReflectionProperty;

/**
 * Class Block
 * @package NanoSoup\Nemesis\ACF
 */
class Block
{
    /**
     * A unique name that identifies the block (without namespace). For example ‘testimonial’.
     * Note: A block name can only contain lowercase alphanumeric characters and dashes, 
     * and must begin with a letter.
     * 
     * @var string
     */
    public $name = '';

    /**
     * The display title for your block. For example ‘Testimonial’.
     * 
     * @var string
     */
    public $title  = '';

    /**
     * This is a short description for your block.
     * 
     * @var string
     */
    public $description = '';

    /**
     * Blocks are grouped into categories to help users browse and discover them.
     * The core provided categories are [ common | formatting | layout | widgets | embed ].
     * Plugins and Themes can also register custom block categories.
     * 
     * @var string
     */
    public $category = 'common';

    /**
     * An icon property can be specified to make it easier to identify a block.
     * These can be any of WordPress’ Dashicons, or a custom svg element.
     * 
     * @var string|array
     */
    public $icon = '';

    /**
     * An array of search terms to help user discover the block while searching.
     * 
     * @var array
     */
    public $keywords = [];

    /**
     * An array of post types to restrict this block type to.
     * 
     * @var array
     */
    public $post_types = ['post', 'page'];

    /**
     * The display mode for your block. Available settings are “auto”, “preview” and “edit”. 
     * Defaults to “preview”.
     * auto: Preview is shown by default but changes to edit form when block is selected.
     * preview: Preview is always shown. Edit form appears in sidebar when block is selected.
     * edit: Edit form is always shown.
     *
     * Note. When in “preview” or “edit” modes, an icon will appear in the block toolbar to toggle between modes.
     * 
     * @var string
     */
    public $mode = 'edit';

    /**
     * The default block alignment.
     * Available settings are “left”, “center”, “right”, “wide” and “full”.
     * Defaults to an empty string.
     * 
     * @var string
     */
    public $align = 'full';

    /**
     * The default block text alignment (see supports setting for more info).
     * Available settings are “left”, “center” and “right”.
     * Defaults to the current language’s text alignment.
     * 
     * @var string
     */
    public $align_text = 'center';

    /**
     * The default block content alignment (see supports setting for more info).
     * Available settings are “top”, “center” and “bottom”.
     * When utilising the “Matrix” control type, additional settings are available to specify all 9 positions from “top left” to “bottom right”.
     * Defaults to “top”.
     * 
     * @var string
     */
    public $align_content = 'center';

    /**
     * The path to a template file used to render the block HTML.
     * This can either be a relative path to a file within the active theme or a full path to any file.
     * 
     * @var string
     */
    public $render_template = '';

    /**
     * Instead of providing a render_template, a callback function name may be specified to output the block’s HTML.
     * 
     * @var mixed
     */
    public $render_callback;

    /**
     * The url to a .css file to be enqueued whenever your block is displayed (front-end and back-end).
     * 
     * @var string
     */
    public $enqueue_style = '';

    /**
     * The url to a .js file to be enqueued whenever your block is displayed (front-end and back-end).
     * 
     * @var string
     */
    public $enqueue_script = '';

    /**
     * A callback function that runs whenever your block is displayed (front-end and back-end) and enqueues scripts and/or styles.
     * 
     * @var mixed
     */
    public $enqueue_assets;

    /**
     * An array of features to support. All properties from the JavaScript block supports documentation may be used. 
     * 
     * The following options are supported:
     * align: This property enables a toolbar button to control the block’s alignment. Defaults to true. Set to false to hide the alignment toolbar. Set to an array of specific alignment names to customize the toolbar.
     * align_text: This property enables a toolbar button to control the block’s text alignment. Defaults to false. Set to true to show the alignment toolbar button.The current selected alignment value will be accessible within the render callback/template via $block['align_text'].
     * align_content: This property enables a toolbar button to control the block’s inner content alignment. Defaults to false. Set to true to show the alignment toolbar button, or set to 'matrix' to enable the full alignment matrix in the toolbar. The current selected alignment value will be accessible within the render callback/template via $block['align_content'].     
     * full_height: This property enables the full height button on the toolbar of a block and adds the $block[‘full_height’] property inside the render template/callback. $block[‘full_height’] will only be true if the full height button is enabled on the block in the editor. Defaults to false.
     * mode: This property allows the user to toggle between edit and preview modes via a button. Defaults to true.
     * multiple: This property allows the block to be added multiple times. Defaults to true.
     * 
     * @var array
     */
    public $supports = [
        'align' => false, 
        'align_text' => false, 
        'align_content' => false,
        'full_height' => false,
        'mode' => true
    ];

    /**
     * An array of structured data used to construct a preview shown within the block-inserter.
     * All values entered into the ‘data’ attribute array will become available within the block render template/callback via $block['data'] or get_field().
     * 
     * @var array
     */
    public $example = [];

    /**
     * Block constructor.
     */
    public function __construct()
    {
        $this->render_callback = [get_called_class(), 'renderBlock'];
    }

    /**
     * @param string $name
     * @return Block
     */
    public function setBlockName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $title
     * @return Block
     */
    public function setBlockTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $description
     * @return Block
     */
    public function setBlockDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $category
     * @return Block
     */
    public function setCat(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @param string|array $icon
     * @return Block
     */
    public function setBlockIcon($icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     * @param array $keywords
     * @return Block
     */
    public function setBlockKeywords(array $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @param array $postTypes
     * @return Block
     */
    public function setPostTypes(array $postTypes): self
    {
        $this->post_types = $postTypes;
        return $this;
    }

    /**
     * @param string $mode
     * @return Block
     */
    public function setMode(string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @param string $align
     * @return Block
     */
    public function setAlign(string $align): self
    {
        $this->align = $align;
        return $this;
    }

    /**
     * @param string $alignText
     * @return Block
     */
    public function setAlignText(string $alignText): self
    {
        $this->align_text = $alignText;
        return $this;
    }

    /**
     * @param string $alignContent
     * @return Block
     */
    public function setAlignContent(string $alignContent): self
    {
        $this->align_content = $alignContent;
        return $this;
    }

    /**
     * @param string $renderTemplate
     * @return Block
     */
    public function setBlockTemplate(string $renderTemplate): self
    {
        $this->render_template = $renderTemplate;
        return $this;
    }

    /**
     * @param mixed $renderCallback
     * @return Block
     */
    public function setBlockCallback($renderCallback): self
    {
        $this->render_callback = $renderCallback;
        return $this;
    }

    /**
     * @param string $enqueueStyle
     * @return Block
     */
    public function setBlockStyle(string $enqueueStyle): self
    {
        $this->enqueue_style = $enqueueStyle;
        return $this;
    }

    /**
     * @param string $enqueueScript
     * @return Block
     */
    public function setBlockScript(string $enqueueScript): self
    {
        $this->enqueue_script = $enqueueScript;
        return $this;
    }

    /**
     * @param mixed $enqueueAssets
     * @return Block
     */
    public function setBlockAssets($enqueueAssets): self
    {
        $this->enqueue_assets = $enqueueAssets;
        return $this;
    }

    /**
     * @param array $supports
     * @return Block
     */
    public function setSupports(array $supports): self
    {
        $this->supports = $supports;
        return $this;
    }

    /**
     * @param string $name
     * @param string $asset
     * @param string $mode
     * @return Block
     */
    public function setPreviewExample(string $name, string $asset, string $mode = 'preview'): self
    {
        $this->example = [
            'attributes' => [
                'mode' => $mode,
                'data' => [
                    $name => get_template_directory_uri() . $asset,
                ]
            ]
        ];
        return $this;
    }

    /**
     * Generate name field from title
     * 
     * @param $title
     * @return string
     */
    public function generateName(string $title): string
    {
        $title = preg_replace('/[^A-Za-z0-9]+/', '_', $title);
        return strtolower($title);
    }

    /**
     * Return an ACF Block
     * 
     * @return array
     */
    public function getBlock(): array
    {
        $block = [];

        if (empty($this->name)) {
            $this->name = $this->generateName($this->title);
        }

        $reflect = new ReflectionClass(static::class);
        foreach ($reflect->getProperties(ReflectionProperty::IS_PUBLIC) as $property) {
            $name = $property->getName();
            if (isset($this->$name)) {
                $block[$name] = $this->$name;
            }
        }

        return $block;
    }

    /**
     * Register an ACF Block
     * 
     * @return void
     */
    public function saveBlock(): void
    {
        if (function_exists('acf_register_block')) {
            acf_register_block($this->getBlock());
        }
    }
}
