<?php

namespace Flynt\Components\HeroCta;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'heroCta',
        'label' => 'Hero: CTA',
        'sub_fields' => [
            [
                'label' => 'General',
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => 'Content',
                'name' => 'contentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
                'wrapper' => [
                    'class' => 'autosize',
                ],
            ],
            [
                'label' => 'Button Link',
                'type' => 'link',
                'name' => 'buttonLink',
                'return_format' => 'array'
            ],
            [
                'label' => 'Options',
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => '',
                'name' => 'options',
                'type' => 'group',
                'layout' => 'row',

                'sub_fields' => [
                    FieldVariables\getTheme(),
                    [
                        'label' => 'Align Text',
                        'name' => 'alignText',
                        'type' => 'group',
                        'layout' => 'table',
                        'sub_fields' => [
                            [
                                'label' => 'Desktop',
                                'name' => 'desktop',
                                'type' => 'select',
                                'allow_null' => 0,
                                'multiple' => 0,
                                'ui' => 1,
                                'ajax' => 0,
                                'choices' => [
                                    'desktopTextAlign--left' => 'Left',
                                    'desktopTextAlign--center' => 'Center',
                                    'desktopTextAlign--right' => 'Right',
                                ],
                                'default_value' => 'desktopTextAlign--left'
                            ],
                            [
                                'label' => 'Mobile',
                                'name' => 'mobile',
                                'type' => 'select',
                                'allow_null' => 0,
                                'multiple' => 0,
                                'ui' => 1,
                                'ajax' => 0,
                                'choices' => [
                                    'mobileTextAlign--left' => 'Left',
                                    'mobileTextAlign--center' => 'Center',
                                    'mobileTextAlign--right' => 'Right',
                                ],
                                'default_value' => 'mobileTextAlign--center'
                            ],
                        ]
                    ],
                    [
                        'label' => 'Full width image',
                        'name' => 'fullWidth',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                    [
                        'label' => 'Use Banner height instead of full?',
                        'name' => 'bannerHeight',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                ],
            ]
        ]
    ];
}
