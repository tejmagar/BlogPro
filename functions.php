<?php

function custom_theme_enqueue_styles(): void
{
    wp_enqueue_style('blog_pro_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');