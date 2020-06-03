<?php

namespace Flynt\Components\PostQuoteSlider;

use Flynt\FieldVariables;
use Flynt\Utils\Options;
use Timber\Timber;




add_filter('Flynt/addComponentData?name=PostQuoteSlider', function ($data) {
    $data['items'] = Timber::get_posts([
        'post_status' => 'publish',
        'post_type' => 'member_quote',
        'ignore_sticky_posts' => 1,
        'post__not_in' => array(get_the_ID())
    ]);

    return $data;
    
});


function getACFLayout()
{
    return [
        'name' => 'PostQuoteSlider',
        'label' => 'PostQuoteSlider: Display content from custom post types in a slider',
        'sub_fields' => [
            [
                'label' => 'General',
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
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
                        'label' => 'Columns',
                        'name' => 'columns',
                        'type' => 'number',
                        'default_value' => 3,
                        'min' => 1,
                        'max' => 4,
                        'step' => 1
                    ]
                ]
            ],
        ]
    ];
}