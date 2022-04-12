<?php

namespace NanoSoup\Nemesis\ACF\Blocks;

use NanoSoup\Nemesis\ACF\Fields\TextField;
use Timber\Timber;

/**
 * Class SampleBlock
 * @package NanoSoup\Nemesis\ACF
 */
class SampleBlock extends Block implements BlockInterface
{
    /**
     * SampleBlock constructor.
     */
    public function __construct()
    {
        parent::__construct();
        add_action('acf/init', [$this, 'registerBlock']);
        add_action('acf/init', [$this, 'registerFieldGroup']);
    }

    /**
     * Register the block with ACF
     * 
     * @return void
     */
    public function registerBlock(): void
    {
        $this->setTitle('Sample Block')
            ->setRenderCallback([self::class, 'renderBlock'])
            ->setExample(
                'block_preview', 
                '/classes/ACF/Blocks/Content/previews/sample-block.png'
            )
            ->setIcon('align-right')
            ->setCategory('content')
            ->saveBlock();
    }

    /**
     * Render the block using HTML/Twig
     *
     * @param mixed $block
     * @param string $content
     * @param bool $isPreview
     * @return void
     */
    public static function renderBlock($block, $content = '', $isPreview = false): void
    {
        $vars['block'] = $block;
        $vars['fields'] = get_fields();

        if (!empty($block['data']['block_preview'])) {
            echo '<img src="' . $block['data']['block_preview'] . '" style="width:100%; height:auto;">';
            return;
        }

        Timber::render('/classes/ACF/Blocks/Content/views/sample-block.twig', $vars);
    }

    /**
     * Register the field group with ACF
     * 
     * @return void
     */
    public function registerFieldGroup(): void
    {
        $prefix = 'sample_block' . __FUNCTION__;

        $sampleField = new TextField();
        $sampleField->setPrefix($prefix)
            ->setLabel('Sample Field');

        $this->fieldGroup->setTitle('Sample Block')
            ->setFields([
                $sampleField->getField()
            ])
            ->setLocation([
                [
                    [
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/sample-block'
                    ]
                ]
            ])
            ->saveFieldGroup();
    }
}
