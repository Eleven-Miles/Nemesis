<?php

namespace NanoSoup\Nemesis\ACF\FieldGroups;

use NanoSoup\Nemesis\ACF\Fields\TextField;

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
        $prefix = 'sample';

        $sampleTextField = new TextField();
        $sampleTextField->setPrefix($prefix . __FUNCTION__)
            ->setLabel('Sample Field');

        $fieldGroup = new FieldGroup();
        $fieldGroup->setTitle('Sample Field Group')
            ->setFields([
                $sampleTextField->getField()
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
