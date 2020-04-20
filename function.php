<?php

if (!function_exists('add_parent_style')) {
    /**
     * style.css dosyasının temaya eklenmesini sağlar.
     * @example add_action('wp_enqueue_scripts', 'add_parent_style');
     */
    function add_parent_style() 
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    }
}

if (!function_exists('add_child_style')) {
    /**
     * style.css dışındaki CSS dosyalarının da temaya dahil edilmesini sağlar.
     * CSS-FILE, temaya eklenecek olan CSS dosyasının ismidir.
     * @example add_action('wp_enqueue_scripts', 'add_child_style');
     */
    function add_child_style()
    {
        wp_enqueue_style('child-style',
            get_stylesheet_directory_uri() . CSS-FILE,
            array('parent-style'),
            wp_get_theme()->get('Version')
        );
    }
}
