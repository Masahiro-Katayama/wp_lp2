<?php

/**
 * OnePress Child Theme Functions
 *
 */

/**
 * Enqueue child theme style
 */
add_action('wp_enqueue_scripts', 'onepress_child_enqueue_styles', 15);
function onepress_child_enqueue_styles()
{
    wp_enqueue_style('onepress-child-style', get_stylesheet_directory_uri() . '/style.css');
}
/**
 * Hook to add custom section after about section
 *
 * @see wp-content/themes/onepress/template-frontpage.php
 */

/*
function add_my_custom_section()
{
    ?>
    <section id="my_section" class="my_section section-padding onepage-section">
        <div class="container">
            <div class="section-title-area">
                <h5 class="section-subtitle"> My section subtitle</h5>
                <h2 class="section-title"> My section title</h2>
            </div>
            <div class="row">
                <!-- Your section content here, you can use bootstrap 4 elements :) -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>

            </div>
        </div>
    </section>
    <?php
    }
    add_action('onepress_after_section_about', 'add_my_custom_section');
    // after_section_ここを変えれば順番も変わる。
*/

/* ブロックの順番編集 */
function my_onepress_frontpage_sections_order()
{
    $mysections = array('services', 'videolightbox', 'gallery', 'counter', 'team',  'news', 'about', 'features', 'contact');
    return $mysections;
}
add_filter('onepress_frontpage_sections_order', 'my_onepress_frontpage_sections_order');

/* コピーライトの編集 */
if (!function_exists('onepress_footer_site_info')) {
    /**
     * Add Copyright and Credit text to footer
     * @since 1.1.3
     */
    function onepress_footer_site_info()
    {
        ?>
        <?php printf(esc_html__('Copyright %1$s %2$s %3$s', 'onepress'), '&copy;', esc_attr(date('Y')), esc_attr(get_bloginfo())); ?>
        All Rights Reserved.

<?php
    }
}
add_action('onepress_footer_site_info', 'onepress_footer_site_info');
