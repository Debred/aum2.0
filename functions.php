<?php
if (!function_exists('aum_theme_setup')) {

    function aum_theme_setup()
    {
        //SEO Titles
        add_theme_support('title-tag');

        //Enable featured images
        add_theme_support('post-thumbnails', array('post'));

        //Add custom sized images
        add_image_size('square', 350, 350, true);
        add_image_size('portrait', 350, 724, true);
        add_image_size('boxes', 400, 375, true);
        add_image_size('mediano', 700, 400, true);
        add_image_size('blog', 966, 644, true);

        //Habilitar Logo Personalizado
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        );

        add_theme_support('custom-logo', $defaults);

        //Soporte a Tipografias
        add_theme_support('appearance-tools');

        //Soporte a Tamaños de Fuente
        add_theme_support('editor-font-sizes', array(
            array(
                'name' => esc_attr__(
                    'Small',
                    'aum_theme'
                ),
                'size' => 12,
                'slug' => 'small'
            ),
            array(
                'name' => esc_attr__(
                    'Regular',
                    'aum_theme'
                ),
                'size' => 16,
                'slug' => 'regular'
            ),
            array(
                'name' => esc_attr__(
                    'Medium',
                    'aum_theme'
                ),
                'size' => 18,
                'slug' => 'medium'
            ),
            array(
                'name' => esc_attr__(
                    'Large',
                    'aum_theme'
                ),
                'size' => 22,
                'slug' => 'large'
            ),
            array(
                'name' => esc_attr__(
                    'Extra Large',
                    'aum_theme'
                ),
                'size' => 28,
                'slug' => 'xl'
            ),
            array(
                'name' => esc_attr__(
                    'Huge',
                    'aum_theme'
                ),
                'size' => 32,
                'slug' => 'xl'
            )
        ));


        // Soporte a Colores
        add_theme_support(
            'editor-color-palette',
            array(
                array(
                    'name'  => __(
                        'Primary Color',
                        'aum_theme'
                    ),
                    'slug'  => 'primary-color',
                    'color' => '#2065B2',
                ),
                array(
                    'name'  => __(
                        'Scondary Color',
                        'aum_theme'
                    ),
                    'slug'  => 'secondary-color',
                    'color' => '#2D5DFE',
                ),
                array(
                    'name'  => __(
                        'Tertiary Color',
                        'aum_theme'
                    ),
                    'slug'  => 'tertiary-color',
                    'color' => '#CBE3FF',
                ),
                array(
                    'name'  => __(
                        'Primary Complementary Color',
                        'aum_theme'
                    ),
                    'slug'  => 'primary-complementary-color',
                    'color' => '#FE9C2D',
                ),
                array(
                    'name'  => __(
                        'Secondary Complementary Color',
                        'aum_theme'
                    ),
                    'slug'  => 'secondary-complementary-color',
                    'color' => '#B26D20',
                ),
                array(
                    'name'  => __(
                        'Text Color',
                        'aum_theme '
                    ),
                    'slug'  => 'text-color',
                    'color' => '#46464F',
                ),
            )
        );

        register_nav_menus(
            array(
                'main_menu' => esc_html__('Main menu', 'aum_theme'),
                //'footer'  => __( 'Footer menu', 'aum_theme' ),
            )
        );
    }
}
add_action('after_setup_theme', 'aum_theme_setup');

/**
 * Disable the emoji's
 */
function disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

// Remove WP embed script
function speed_stop_loading_wp_embed()
{
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
    }
}
add_action('init', 'speed_stop_loading_wp_embed');

//Remove RSD links
remove_action('wp_head', 'rsd_link');

// Disable XML-RSD
add_filter('xmlrpc_enabled', '__return_false');

// Remove WLManifest Link
remove_action('wp_head', 'wlwmanifest_link');

// Disable Dashicons on front-end
function wpdocs_dequeue_dashicon()
{
    if (current_user_can('update_core')) {
        return;
    }
    wp_deregister_style('guiones');
}
add_action('wp_enqueue_scripts', 'wpdocs_dequeue_dashicon');

/**
 * Enqueue scripts and styles.
 *
 *
 * @return void
 */
function aum_theme_scripts()
{
    // Load jQuery on the footer to eliminate render-blocking resources.
    wp_scripts()->add_data('jquery', 'group', 1);
    wp_scripts()->add_data('jquery-core', 'group', 1);
    wp_scripts()->add_data('jquery-migrate', 'group', 1);

    // Global stylesheet.
    wp_enqueue_style('aum-theme-fonts', get_template_directory_uri() . "/assets/fonts/fonts.css", array(), '1.0');
    wp_enqueue_style('aum-theme-main-stylesheet', get_template_directory_uri() . "/build/css/main-style.css", array('aum-theme-fonts'), '1.0');

    // Main JS scripts.
    wp_enqueue_script('aum-theme-main-scripts', get_template_directory_uri() . '/build/js/scripts.js', array(), '1.0', true);

    // Load specific template stylesheet
    if(is_front_page()){
        wp_enqueue_style('aum-theme-front-page', get_template_directory_uri() . "/build/css/templates/frontpage.css", array(), '1.0');
    }

    if (is_page()) {
        /* if (!is_page_template('page-templates/template-homepage.php')) wp_enqueue_style('aum-theme-template-default', get_template_directory_uri() . '/assets/scss/page-templates/template-default.css', array(), '1.1');

        switch (get_page_template_slug()) {
            case 'page-templates/template-homepage.php':
                wp_enqueue_style('aum-theme-template-homepage', get_template_directory_uri() . '/assets/scss/page-templates/template-homepage.css');
                break;
        } */
    }

   /*  if (is_home() || is_archive() || is_single()) {
        wp_enqueue_style('aum-theme-template-default', get_template_directory_uri() . '/assets/scss/page-templates/template-default.css');
        wp_enqueue_style('aum-theme-page-blog-posts-stylesheet', get_template_directory_uri() . '/assets/scss/page-templates/template-blog-posts.css');

        if (is_singular('videos')) {
            wp_enqueue_style('aum-theme-template-videos', get_template_directory_uri() . '/assets/scss/page-templates/template-videos.css', array('slick-theme-min', 'slick-min'));
        }
        if (is_post_type_archive('videos') || is_tax('video_categories')) {
            wp_enqueue_style('aum-theme-template-videos', get_template_directory_uri() . '/assets/scss/page-templates/template-archive-videos.css', array());
        }
        if (is_post_type_archive('reports') || is_tax('report_categories')) {
            wp_enqueue_style('aum-theme-template-reports', get_template_directory_uri() . '/assets/scss/page-templates/template-archive-reports.css', array('slick-theme-min', 'slick-min'));
        }
    } */
}
add_action('wp_enqueue_scripts', 'aum_theme_scripts');
