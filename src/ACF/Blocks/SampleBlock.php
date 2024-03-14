<?php

namespace NanoSoup\Nemesis\ACF\Blocks;

use  NanoSoup\Nemesis\ACF\Fields\AccordionField;
use  NanoSoup\Nemesis\ACF\Fields\ButtonGroupField;
use  NanoSoup\Nemesis\ACF\Fields\CheckboxField;
use  NanoSoup\Nemesis\ACF\Fields\ChoiceField;
use  NanoSoup\Nemesis\ACF\Fields\ColorPickerField;
use  NanoSoup\Nemesis\ACF\Fields\DatePickerField;
use  NanoSoup\Nemesis\ACF\Fields\DateTimePickerField;
use  NanoSoup\Nemesis\ACF\Fields\EmailField;
use  NanoSoup\Nemesis\ACF\Fields\FileField;
use  NanoSoup\Nemesis\ACF\Fields\GalleryField;
use  NanoSoup\Nemesis\ACF\Fields\GoogleMapField;
use  NanoSoup\Nemesis\ACF\Fields\GroupField;
use  NanoSoup\Nemesis\ACF\Fields\ImageField;
use  NanoSoup\Nemesis\ACF\Fields\LinkField;
use  NanoSoup\Nemesis\ACF\Fields\MessageField;
use  NanoSoup\Nemesis\ACF\Fields\NumberField;
use  NanoSoup\Nemesis\ACF\Fields\OembedField;
use  NanoSoup\Nemesis\ACF\Fields\PageLinkField;
use  NanoSoup\Nemesis\ACF\Fields\PasswordField;
use  NanoSoup\Nemesis\ACF\Fields\PostField;
use  NanoSoup\Nemesis\ACF\Fields\RadioField;
use  NanoSoup\Nemesis\ACF\Fields\RangeField;
use  NanoSoup\Nemesis\ACF\Fields\RelationshipField;
use  NanoSoup\Nemesis\ACF\Fields\RepeaterField;
use  NanoSoup\Nemesis\ACF\Fields\SelectField;
use  NanoSoup\Nemesis\ACF\Fields\TextField;
use  NanoSoup\Nemesis\ACF\Fields\WysiwygField;
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
            ->setPreviewExample(
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
        $prefix = 'sample_block' . __CLASS__ . __FUNCTION__;
        $this->fieldGroup->setTitle('Sample Block')
            ->setFields([
                AccordionField::make($prefix)
                    ->setLabel('Form Options')
                    ->getField(),
                ButtonGroupField::make($prefix)
                    ->setLabel('Button Group')
                    ->setChoices([
                        'red' => 'Red',
                        'green' => 'Green'
                    ])
                    ->setWrapperWidth('50')
                    ->setWrapperClass('test')
                    ->setWrapperId('name')
                    ->getField(),
                AccordionField::make($prefix)
                    ->setLabel('Checkbox')
                    ->getField(),
                CheckboxField::make($prefix)
                    ->setLabel('Checkbox')
                    ->setChoices([
                        'red' => 'Red',
                        'green' => 'Green'
                    ])
                    ->getField(),
                AccordionField::make($prefix)
                    ->setEndpoint(true)
                    ->getField(),
                ChoiceField::make($prefix)
                    ->setLabel('Choice')
                    ->setWrapperWidth('50')
                    ->setMessage('Enable')
                    ->getField(),
                ColorPickerField::make($prefix)
                    ->setLabel('Colour Picker')
                    ->setWrapperWidth('50')
                    ->setEnableOpacity(true)
                    ->getField(),
                DatePickerField::make($prefix)
                    ->setLabel('Date Picker')
                    ->setWrapperWidth('50')
                    ->setDisplayFormat('Y-m-d')
                    ->getField(),
                DateTimePickerField::make($prefix)
                    ->setLabel('Date Time Picker')
                    ->setWrapperWidth('50')
                    ->setDisplayFormat('Y-m-d H:i:s')
                    ->getField(),
                EmailField::make($prefix)
                    ->setLabel('Email')
                    ->setAppend('@')
                    ->getField(),
                FileField::make($prefix)
                    ->setLabel('File')
                    ->setMaxSize('1MB')
                    ->getField(),
                GalleryField::make($prefix)
                    ->setLabel('Gallery')
                    ->setMaxSize('1MB')
                    ->setMaxWidth(1000)
                    ->getField(),
                GoogleMapField::make($prefix)
                    ->setLabel('Map')
                    ->setCenterLat('52.6319985')
                    ->setCenterLng('1.2987161')
                    ->getField(),
                GroupField::make($prefix)
                    ->setLabel('Group')
                    ->setSubFields([
                        TextField::make($prefix)
                            ->setLabel('Group Title')
                            ->getField(),
                        WysiwygField::make($prefix)
                            ->setLabel('Group Content')
                            ->getField(),
                    ])
                    ->getField(),
                ImageField::make($prefix)
                    ->setLabel('Image')
                    ->setMaxSize('1MB')
                    ->getField(),
                LinkField::make($prefix)
                    ->setLabel('Link')
                    ->getField(),
                MessageField::make($prefix)
                    ->setLabel('Message')
                    ->setMessage('This is a test message.')
                    ->getField(),
                NumberField::make($prefix)
                    ->setLabel('Number')
                    ->setMax(100)
                    ->setPrepend('£')
                    ->getField(),
                OembedField::make($prefix)
                    ->setLabel('Oembed')
                    ->setHeight(200)
                    ->getField(),
                PageLinkField::make($prefix)
                    ->setLabel('Page Link')
                    ->setPostType('post')
                    ->setMultiple(true)
                    ->getField(),
                PasswordField::make($prefix)
                    ->setLabel('Password')
                    ->setAppend('Enter a strong password')
                    ->getField(),
                PostField::make($prefix)
                    ->setLabel('Post')
                    ->setPostType('post')
                    ->setMultiple(true)
                    ->getField(),
                RadioField::make($prefix)
                    ->setLabel('Radio')
                    ->setChoices([
                        'red' => 'Red',
                        'green' => 'Green'
                    ])
                    ->getField(),
                RangeField::make($prefix)
                    ->setLabel('Range')
                    ->setMin(1)
                    ->setMax(10)
                    ->setPrepend('Min')
                    ->setAppend('Max')
                    ->getField(),
                RelationshipField::make($prefix)
                    ->setLabel('Relationship')
                    ->setPostType('post')
                    ->setMax(10)
                    ->getField(),
                RepeaterField::make($prefix)
                    ->setLabel('CTAs')
                    ->setSubFields([
                        TextField::make($prefix)
                            ->setLabel('CTA Title')
                            ->getField(),
                        WysiwygField::make($prefix)
                            ->setLabel('CTA Content')
                            ->getField(),
                    ])
                    ->getField(),
                SelectField::make($prefix)
                    ->setLabel('Select')
                    ->setChoices([
                        'red' => 'Red',
                        'green' => 'Green'
                    ])
                    ->setMultiple(true)
                    ->setUi(true)
                    ->getField(),
                TextField::make($prefix)
                    ->setLabel('Title')
                    ->getField(),
                WysiwygField::make($prefix)
                    ->setLabel('Content')
                    ->setInstructions('Here are some instructions')
                    ->getField()
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
