<?php
/**
 * Template Name: Portfolio Page
 *
 * @package WordPress
 * @subpackage The_Art_Studio
 * @since The Art Studio 1.0
 */
get_header(); ?>
<section class="container"><!-- .container -->
    <div id="portfolio" class="site-main">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php
            $gallery = get_post_galleries_images( $post );
            foreach ($gallery[0] as $image) {
		$image_src = str_replace("-255x170", "", $image);
                ?>
                <a class="image-popup col-lg-3 col-md-4 col-sm-6 col-xs-12" href="<?php echo $image_src ?>" rel="lightbox" >
                        <img src="<?php echo $image ?>" class="img-responsive">
                </a>
            <?php
            }
            ?>
        <?php endwhile; endif; ?>
    </div><!-- #portfolio -->
<?php
get_footer(); ?>