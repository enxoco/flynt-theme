<?php

namespace Flynt\Components\BlockWysiwygTwoCol;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'blockWysiwygTwoCol',
        'label' => 'Block: Wysiwyg Two Col',
        'sub_fields' => [
            [
                'label' => 'General',
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => 'General',
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => 'Title Left',
                'name' => 'preContentHtmlLeft',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'wrapper' => [
                    'class' => 'autosize',
                ],
            ],
            [
                'label' => 'Content',
                'name' => 'contentHtmlLeft',
                'type' => 'wysiwyg',
                'media_upload' => 1,
                'required' => 1,
                'wrapper' => [
                    'class' => 'autosize',
                ],
            ],
            [
                'label' => 'Title Right',
                'name' => 'preContentHtmlRight',
                'type' => 'wysiwyg',
                'media_upload' => 0,
                'wrapper' => [
                    'class' => 'autosize',
                ],
            ],
            [
                'label' => 'Content',
                'name' => 'contentHtmlRight',
                'type' => 'wysiwyg',
                'media_upload' => 1,
                'required' => 1,
                'wrapper' => [
                    'class' => 'autosize',
                ],
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
                    FieldVariables\getTheme()
                ]
            ]
        ]
    ];
}
