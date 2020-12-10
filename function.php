<?php
/**
 * Child Theme için function.php dosyası.
 *
 * Ana tema üzerindeki değişikliklerin güncelleme sonrası bozulmaması için
 * bu dosya üzerinde gerekli değişiklikler yapılmalıdır.
 *
 * @package WordPress
 * @author Emre Can OZTAS <me@emrecanoztas.com>
 * @version 1.0
 */

add_action('wp_enqueue_scripts', 'add_parent_style');
// add_action('wp_enqueue_scripts', 'add_child_style');

if (!function_exists('add_parent_style')) {
    /**
     * CSS dosyası ekler.
     *
     * style.css dosyasının temaya eklenmesini sağlar.
     *
     * @example add_action('wp_enqueue_scripts', 'add_parent_style');
     */
    function add_parent_style()
    {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    }
}

if (!function_exists('add_child_style')) {
    /**
     * CSS dosyası ekler.
     *
     * style.css dışında; child theme'de kullanılan diğer CSS dosyalarının
     * temaya eklenmesini sağlar.
     *
     * @example add_action('wp_enqueue_scripts', 'add_child_style');
     */
    function add_child_style()
    {
        wp_enqueue_style(
            'child-style',
            CHILD - THEME - CSS, // CHILD-THEME-CSS: Eklenecek CSS dosyasının adresi
            array('parent-style'),
            wp_get_theme()->get('Version')
        );
    }
}
