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
     * Used to set up the field group for the block fields.
     *
     * @var BlockFieldGroup
     */
    protected $fieldGroup;

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
        'mode' => true,
        'multiple' => true
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
        $this->fieldGroup = new BlockFieldGroup();
        $this->render_callback = [get_called_class(), 'renderBlock'];
    }

    /**
     * Get the value of fieldGroup
     */
    public function getFieldGroup(): BlockFieldGroup
    {
        return $this->fieldGroup;
    }

    /**
     * Set the value of fieldGroup
     */
    public function setFieldGroup(BlockFieldGroup $fieldGroup): self
    {
        $this->fieldGroup = $fieldGroup;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Legacy set the value of name
     */
    public function setBlockName($name): self
    {
        return $this->setName($name);
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Legacy set the value of title
     */
    public function setBlockTitle($title): self
    {
        $this->title = $title;
        return $this->setTitle($title);
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Legacy set the value of description
     */
    public function setBlockDescription($description): self
    {
        return $this->setDescription($description);
    }

    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     */
    public function setCategory($category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Legacy set the value of category
     */
    public function setCat($category): self
    {
        return $this->setCategory($category);
    }

    /**
     * Get the value of icon
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set the value of icon
     */
    public function setIcon($icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Legacy set the value of icon
     */
    public function setBlockIcon($icon): self
    {
        return $this->setIcon($icon);
    }

    /**
     * Get the value of keywords
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set the value of keywords
     */
    public function setKeywords($keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Legacy set the value of keywords
     */
    public function setBlockKeywords($keywords): self
    {
        return $this->setKeywords($keywords);
    }

    /**
     * Get the value of post_types
     */
    public function getPostTypes()
    {
        return $this->post_types;
    }

    /**
     * Set the value of post_types
     */
    public function setPostTypes($post_types): self
    {
        $this->post_types = $post_types;

        return $this;
    }

    /**
     * Get the value of mode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set the value of mode
     */
    public function setMode($mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get the value of align
     */
    public function getAlign()
    {
        return $this->align;
    }

    /**
     * Set the value of align
     */
    public function setAlign($align): self
    {
        $this->align = $align;

        return $this;
    }

    /**
     * Get the value of align_text
     */
    public function getAlignText()
    {
        return $this->align_text;
    }

    /**
     * Set the value of align_text
     */
    public function setAlignText($align_text): self
    {
        $this->align_text = $align_text;

        return $this;
    }

    /**
     * Get the value of align_content
     */
    public function getAlignContent()
    {
        return $this->align_content;
    }

    /**
     * Set the value of align_content
     */
    public function setAlignContent($align_content): self
    {
        $this->align_content = $align_content;

        return $this;
    }

    /**
     * Get the value of render_template
     */
    public function getRenderTemplate()
    {
        return $this->render_template;
    }

    /**
     * Set the value of render_template
     */
    public function setRenderTemplate($render_template): self
    {
        $this->render_template = $render_template;

        return $this;
    }

    /**
     * Get the value of render_callback
     */
    public function getRenderCallback()
    {
        return $this->render_callback;
    }

    /**
     * Set the value of render_callback
     */
    public function setRenderCallback($render_callback): self
    {
        $this->render_callback = $render_callback;

        return $this;
    }

    /**
     * Legacy set the value of render_callback
     */
    public function setBlockCallback($render_callback): self
    {
        return $this->setRenderCallback($render_callback);
    }

    /**
     * Get the value of enqueue_style
     */
    public function getEnqueueStyle()
    {
        return $this->enqueue_style;
    }

    /**
     * Set the value of enqueue_style
     */
    public function setEnqueueStyle($enqueue_style): self
    {
        $this->enqueue_style = $enqueue_style;

        return $this;
    }

    /**
     * Get the value of enqueue_script
     */
    public function getEnqueueScript()
    {
        return $this->enqueue_script;
    }

    /**
     * Set the value of enqueue_script
     */
    public function setEnqueueScript($enqueue_script): self
    {
        $this->enqueue_script = $enqueue_script;

        return $this;
    }

    /**
     * Get the value of enqueue_assets
     */
    public function getEnqueueAssets()
    {
        return $this->enqueue_assets;
    }

    /**
     * Set the value of enqueue_assets
     */
    public function setEnqueueAssets($enqueue_assets): self
    {
        $this->enqueue_assets = $enqueue_assets;

        return $this;
    }

    /**
     * Get the value of supports
     */
    public function getSupports()
    {
        return $this->supports;
    }

    /**
     * Set the value of supports
     */
    public function setSupports($supports): self
    {
        $this->supports = $supports;

        return $this;
    }

    /**
     * Get the value of example
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * Set the value of example
     */
    public function setExample($name, $asset, $mode = 'preview'): self
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
     * Legacy set the value of example
     */
    public function setPreviewExample($name, $asset, $mode = 'preview'): self
    {
        return $this->setExample($name, $asset, $mode);
    }

    /**
     * Generate name field from title
     * 
     * @param $title
     * @return string
     */
    public function generateName(string $title): string
    {
        $title = preg_replace('/[^A-Za-z0-9]+/', '-', $title);
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
