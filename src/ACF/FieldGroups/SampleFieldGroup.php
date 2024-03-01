<?php

namespace NanoSoup\Nemesis\ACF\FieldGroups;

use NanoSoup\Nemesis\ACF\Fields\TextField;
use NanoSoup\Nemesis\ACF\Fields\WysiwygField;
use NanoSoup\Nemesis\ACF\Fields\RepeaterField;

/**
 * Class SampleFieldGroup
 * @package NanoSoup\Nemesis\ACF
 */
class SampleFieldGroup extends FieldGroup implements FieldGroupInterface
{
    /**
     * SampleFieldGroup constructor.
     */
    public function __construct()
    {
        parent::__construct();
        add_action('acf/init', [$this, 'registerFieldGroup']);
    }

    /**
     * Register the field group with ACF
     * 
     * @return void
     */
    public function registerFieldGroup(): void
    {
        $prefix = 'sample' . __CLASS__ . __FUNCTION__;
        FieldGroup::make()->setTitle('Sample Field Group')
            ->setFields([
                TextField::make($prefix)
                    ->setLabel('Title')
                    ->getField(),
                WysiwygField::make($prefix)
                    ->setLabel('Content')
                    ->setInstructions('Here are some instructions')
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
                    ])->getField()
            ])
            ->setLocation([
                [
                    [
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ]
                ]
            ])
            ->saveFieldGroup();
    }
}
