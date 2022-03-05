<?php

namespace NanoSoup\Nemesis\ACF\Blocks;

/**
 * Class Block
 * @package NanoSoup\Nemesis\ACF
 */
class Block
{
    /**
     * @var string
     */
    public $blockName = '';

    /**
     * @var string
     */
    public $blockTitle  = '';

    /**
     * @var mixed
     */
    public $blockCallback;

    /**
     * @var string
     */
    public $blockDescription = '';

    /**
     * @var string
     */
    public $blockKeywords = [];

    /**
     * @var string
     */
    public $blockIcon = '';

    /**
     * @var string
     */
    public $catName = '';

    /**
     * @var string
     */
    public $catSlug = 'common';

    /**
     * @var string
     */
    public $mode = 'edit';

    /**
     * @var array
     */
    public $postTypes = ['post', 'page'];
    
    /**
     * @var array
     */
    public $supports = ['align' => false];

    /**
     * @var string
     */
    public $exampleName = '';

    /**
     * @var string
     */
    public $example = '';

    /**
     * Block constructor.
     */
    public function __construct()
    {
        $this->blockCallback = [get_called_class(), 'renderBlock'];
    }

    /**
     * @param mixed $blockName
     * @return Block
     */
    public function setBlockName(string $blockName): self
    {
        $this->blockName = $blockName;
        return $this;
    }

    /**
     * @param mixed $blockTitle
     * @return Block
     */
    public function setBlockTitle($blockTitle): self
    {
        $this->blockTitle = $blockTitle;
        return $this;
    }

    /**
     * @param mixed $blockCallback
     * @return Block
     */
    public function setBlockCallback($blockCallback): self
    {
        $this->blockCallback = $blockCallback;
        return $this;
    }

    /**
     * @param string $blockDescription
     * @return Block
     */
    public function setBlockDescription(string $blockDescription): self
    {
        $this->blockDescription = $blockDescription;
        return $this;
    }

    /**
     * @param string $blockKeywords
     * @return Block
     */
    public function setBlockKeywords(string $blockKeywords): self
    {
        $this->blockKeywords = $blockKeywords;
        return $this;
    }

    /**
     * @param string $blockIcon
     * @return Block
     */
    public function setBlockIcon(string $blockIcon): self
    {
        $this->blockIcon = $blockIcon;
        return $this;
    }

    /**
     * @param string $catSlug
     * @return Block
     */
    public function setCat(string $catSlug): self
    {
        $this->catSlug = $catSlug;
        return $this;
    }
    
    /**
     * @param array $supports
     * @return Block
     */
    public function setSupports(array $supports): self
    {
        $this->supports = array_merge($this->supports, $supports);
        return $this;
    }

    /**
     * @param string $mode
     * @return $this
     */
    public function setMode(string $mode): self
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @param string $exampleName Preview example asset name.
     * @param string $example Preview example asset uri string.
     * @return self
     */
    public function setPreviewExample(string $exampleName, string $example): self
    {
        $this->exampleName = $exampleName;
        $this->example = $example;
        return $this;
    }

    /**
     * @param array $postTypes
     * @return Block
     */
    public function setPostTypes(array $postTypes): self
    {
        $this->postTypes = $postTypes;
        return $this;
    }

    /**
     * Register an ACF Block
     * @return void
     */
    public function saveBlock(): void
    {
        if (function_exists('acf_register_block')) {
            $args = [
                'name' => $this->blockName,
                'title' => $this->blockTitle,
                'description' => $this->blockDescription,
                'render_callback' => $this->blockCallback,
                'category' => $this->catSlug,
                'icon' => $this->blockIcon,
                'keywords' => $this->blockKeywords,
                'post_types' => $this->postTypes,
                'mode' => $this->mode,
                'supports' => $this->supports
            ];

            if (!empty($this->exampleName) && !empty($this->example)) {
                $args['example'] = [
                    'attributes' => [
                        'mode' => 'preview',
                        'data' => [
                            $this->exampleName => get_template_directory_uri() . $this->example,
                        ]
                    ],
                ];
            }

            acf_register_block($args);
        }
    }
}
