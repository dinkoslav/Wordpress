<?php
    function theartstudio_setup() {
    load_theme_textdomain( 'theartstudio', get_template_directory() . '/languages' );

    // Set default values for the upload media box
    update_option('image_default_align', 'center' );
    update_option('image_default_link_type', 'none' );
    update_option('image_default_size', 'large' );

    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );

    /*
    * This theme supports all available post formats by default.
    * See https://codex.wordpress.org/Post_Formats
    */
    add_theme_support( 'post-formats', array(
    'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
    ) );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'primary', __( 'Navigation Menu', 'theartstudio' ) );

    /*
    * This theme uses a custom image size for featured images, displayed on
    * "standard" posts and pages.
    */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 255, 170 );

    }
        add_action( 'after_setup_theme', 'theartstudio_setup' );

    function theartstudio_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Main Widget Area', 'theartstudio' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Appears in the navigation section of the site.', 'theartstudio' )
        ) );

        register_sidebar( array(
            'name'          => __( 'Main Widget Area Bottom', 'theartstudio' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Appears in the navigation section of the site.', 'theartstudio' )
        ) );
    }
    add_action( 'widgets_init', 'theartstudio_widgets_init' );

    function mytheme_comment() {
        ?>
        <div class="col-xs-10 col-xs-offset-1">
            <div class="comment-info hidden-xs">
                <p><span class="glyphicon glyphicon-user"></span> <?php echo (strlen(get_comment_author()) > 20) ? substr(esc_attr(get_comment_author()), 0, 18).'...' : esc_attr(get_comment_author()); ?>
                    <span class="comment-time"><?php comment_date('d/m/Y H:i'); ?></span>
                </p>
            </div>
            <div class="xs-comment comment-info visible-xs">
                <p>
                    <div class="col-xs-12"><?php echo (strlen(get_comment_author()) > 20) ? substr(esc_attr(get_comment_author()), 0, 18).'...' : esc_attr(get_comment_author()); ?></div>
                    <div class="col-xs-12"><span class="comment-time"><?php comment_date('d/m/Y H:i'); ?></span></div>
                </p>
            </div>
            <div class="comment-content">
                    <?php comment_text(); ?>
            </div>
        </div>
    <?php
    }
?>