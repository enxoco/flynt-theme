<?php

namespace Flynt\Components\HeroImageCta;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'heroImageCta',
        'label' => 'Hero: Image CTA',
        'sub_fields' => [
            [
                'label' => 'General',
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => 'Images',
                'type' => 'group',
                'name' => 'images',
                'layout' => 'table',
                'sub_fields' => [
                    [
                        'label' => 'Desktop Image',
                        'name' => 'imageDesktop',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg',
                        'required' => 1,
                        'instructions' => 'Recommended resolution greater than 2048 x 800 px.'
                    ],
                    [
                        'label' => 'Mobile Image',
                        'name' => 'imageMobile',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'mime_types' => 'jpg,jpeg',
                        'instructions' => 'Recommended resolution greater than 750 x 800 px.'
                    ]
                ]
            ],
            [
                'name' => 'contentHtml',
                'label' => 'Content',
                'type' => 'wysiwyg',
                'tabs' => 'visual,text',
                'media_upload' => 0,
                'delay' => 1,
                'required' => 1,
                'wrapper' => [
                    'class' => 'autosize',
                ],
                'instructions' => 'The content overlaying the image. Character Recommendations: Title: 30-100, Content: 80-250.'
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
                        'label' => 'Align Image',
                        'name' => 'alignImage',
                        'type' => 'group',
                        'layout' => 'table',
                        'sub_fields' => [
                            [
                                'label' => 'Desktop',
                                'name' => 'desktop',
                                'type' => 'group',
                                'sub_fields' => [
                                    [
                                        'label' => ' Horizontal',
                                        'name' => 'horizontal',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'desktopHorizontalAlign--left' => 'Left',
                                            'desktopHorizontalAlign--center' => 'Center',
                                            'desktopHorizontalAlign--right' => 'Right',
                                        ],
                                        'default_value' => 'desktopHorizontalAlign--center'
                                    ],
                                    [
                                        'label' => 'Vertical',
                                        'name' => 'vertical',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'desktopVerticalAlign--top' => 'Top',
                                            'desktopVerticalAlign--center' => 'Center',
                                            'desktopVerticalAlign--bottom' => 'Bottom',
                                        ],
                                        'default_value' => 'desktopVerticalAlign--center'
                                    ],
                                ]
                            ],
                            [
                                'label' => 'Mobile',
                                'name' => 'mobile',
                                'type' => 'group',
                                'sub_fields' => [
                                    [
                                        'label' => ' Horizontal',
                                        'name' => 'horizontal',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'mobileHorizontalAlign--left' => 'Left',
                                            'mobileHorizontalAlign--center' => 'Center',
                                            'mobileHorizontalAlign--right' => 'Right',
                                        ],
                                        'default_value' => 'mobileHorizontalAlign--center'
                                    ],
                                    [
                                        'label' => 'Vertical',
                                        'name' => 'vertical',
                                        'type' => 'select',
                                        'allow_null' => 0,
                                        'multiple' => 0,
                                        'ui' => 1,
                                        'ajax' => 0,
                                        'choices' => [
                                            'mobileVerticalAlign--top' => 'Top',
                                            'mobileVerticalAlign--center' => 'Center',
                                            'mobileVerticalAlign--bottom' => 'Bottom',
                                        ],
                                        'default_value' => 'mobileVerticalAlign--center'
                                    ],
                                ]
                            ],
                        ]
                    ],
                    'sub_fields' => [
                        FieldVariables\getTheme(),
                        [
                            'label' => 'Center Container',
                            'name' => 'centerContainer',
                            'type' => 'true_false',
                            'default_value' => 0,
                            'ui' => 1
                        ],
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
                ]
            ],
        ]
    ];
}
