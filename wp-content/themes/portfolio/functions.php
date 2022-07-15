<?php
function portfolio_files()
{
    wp_enqueue_style('main_styles', get_stylesheet_uri());
    wp_enqueue_style("aos", "https://unpkg.com/aos@next/dist/aos.css");
    wp_enqueue_script('aos-script', 'https://unpkg.com/aos@next/dist/aos.js');
    /* wp_enqueue_style('font_awesome', "https://kit.fontawesome.com/8a9452b019.js"); */
    wp_enqueue_script('calendly', 'https://assets.calendly.com/assets/external/widget.js', '', '1.0', true);
    wp_enqueue_script('active-links', get_bloginfo("template_url") . '/js/active-links.js', '', '1.0', true);
    wp_enqueue_script('navbar-hide', get_bloginfo("template_url") . '/js/NavbarHide.js', '', '1.0', true);
    wp_enqueue_script('page-loader', get_bloginfo("template_url") . '/js/PageLoader.js', '', '1.0', true);
    wp_enqueue_script('app', get_bloginfo("template_url") . '/js/app.js', '', '1.0', true);
    wp_enqueue_script('slideshow', get_bloginfo("template_url") . '/js/Slideshow.js', '', '1.0', true);
    wp_enqueue_script('project', get_bloginfo("template_url") . '/js/Project.js', '', '1.0', true);
    wp_enqueue_script('gtag', "https://www.googletagmanager.com/gtag/js?id=G-5RF99P8SKH", '', '1.0', true);
}

add_action('wp_enqueue_scripts', 'portfolio_files');

add_filter( 'get_site_icon_url', '__return_false' );

/* function portfolio_register_scripts(){ */
/* } */

add_theme_support('title-tag');

function project_custom_post_type()
{
    register_post_type(
        "project",
        array(
            "labels" => array(
                "name" => __("Projects", "textdomain"),
                "singular_name" => __("Project", "textdomain"),
            ),
            "public" => true,
            "has_archive" => true,
            "rewrite" => array("slug" => "projects"),
            "show_in_rest" => true,
            "supports" => array("editor", "title"),
            "menu_icon" => "dashicons-hammer"
        )
    );
}
add_action('init', 'project_custom_post_type');

function add_jquery()
{
    wp_enqueue_script('jquery', '', '', '1.0', true);
}

add_action('init', 'add_jquery');

function projectModal()
{ ?>
    <div id="project-modal" class="project-modal" style="display: none;" data-id="">
        <button class="close" onclick="closeProjectModal()">&times;</button>
        <div class="project-modal__container">
            <div id="project-slideshow" class="project-modal__container--slideshow">
                <div id="project-slideshow__container">
                </div>
                <div id="dots">
                </div>
            </div>
            <div id="project-description" class="project-modal__container--description">
            </div>
        </div>
    </div>
<?php }

function calendarModal()
{ ?>
    <div id="calendar-modal" class="calendar-modal" style="display: none;">
        <button class="close" onclick="toggleCalendarModal()">&times;</button>
        <div class="calendar-modal__container">
            <!--<div class="calendly-inline-widget" data-url="https://calendly.com/hateyoh588/30min?background_color=2a2c2f&text_color=ffffff&primary_color=5f85db" style="min-width:320px;height:1080px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>-->
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/mehulsingh072001/q-a-meeting" style="min-width:320px;height:630px;"></div>
            <!-- Calendly inline widget end -->
        </div>
    </div>
<?php }

function acf_settings_path($path)
{
    return "https://www.mehulsingh.com/bitnami/wordpress/wp-content/plugins/advanced-custom-fields-pro/";
}
add_filter('acf/settings/path', 'acf_settings_path');

function acf_settings_dir($dir)
{
    return "https://www.mehulsingh.com/bitnami/wordpress/wp-content/plugins/advanced-custom-fields-pro/";
}
add_filter('acf/settings/dir', 'acf_settings_dir');
