<?php

namespace NanoSoup\Nemesis\ACF\FieldGroups;

use NanoSoup\Nemesis\ACF\Fields\TextField;
use NanoSoup\Nemesis\ACF\Fields\WysiwygField;

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

        $sampleTextField = new TextField();
        $sampleTextField->setPrefix($prefix)
            ->setLabel('Title');
        $sampleWysiwygField = new WysiwygField();
        $sampleWysiwygField->setPrefix($prefix)
            ->setLabel('Content');

        $fieldGroup = new FieldGroup();
        $fieldGroup->setTitle('Sample Field Group')
            ->setFields([
                $sampleTextField->getField(),
                $sampleWysiwygField->getField()
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
