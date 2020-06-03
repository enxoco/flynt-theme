<?php

namespace Flynt\Components\ListImages;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'listImages',
        'label' => 'List: Images',
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
                'label' => 'Items',
                'name' => 'items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'row',
                'button_label' => 'Add Item',
                'sub_fields' => [
                    [
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'preview_size' => 'medium',
                        'instructions' => '',
                        'max_size' => 4,
                        'required' => true,
                        'mime_types' => 'gif,jpg,jpeg,png,svg'
                    ],
                    [
                        'label' => 'Text content',
                        'name' => 'textContentHtml',
                        'type' => 'wysiwyg',
                        'tabs' => 'visual,text',
                        'media_upload' => 0,
                        'delay' => 1
                    ],
                ]
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
                    [
                        'label' => 'Full width image',
                        'name' => 'fullWidth',
                        'type' => 'true_false',
                        'default_value' => 0,
                        'ui' => 1
                    ],
                ]
            ],
        ]
    ];
}
