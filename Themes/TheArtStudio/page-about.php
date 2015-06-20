<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage The_Art_Studio
 * @since The Art Studio 1.0
 */
get_header(); ?>
<section class="container"><!-- .container -->
    <div id="about" class="site-main">
        <div class="col-sm-6">
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>" alt="image" class="img-responsive">
        </div>
        <div class="col-sm-6">
            <h2>The Art Studio</h2>
            <p>
            <?php if ( have_posts() ) :
                // Start the Loop.
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            endif;?>
            </p>
        </div>
    </div><!-- #about -->
<?php
get_footer(); ?>