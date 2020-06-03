<?php

use Timber\Timber;
use Timber\Post;

$context = Timber::get_context();
$context['post'] = new Post();

if ( function_exists( 'the_custom_logo' ) ) {

    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $context['logo'] = $logo[0];
    // $context['menu_color'] = theme_mod('menu_nav_link_color_picker');
   }
   remove_filter ('the_content', 'wpautop'); 


Timber::render('templates/single.twig', $context);
