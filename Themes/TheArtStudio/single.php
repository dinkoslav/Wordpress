<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage The_Art_Studio
 * @since The Art Studio 1.0
 */

get_header(); ?>
<section class="container"><!-- .container -->
    <section class="container" id="blog">
        <?php
        // Start the Loop.
        while ( have_posts() ) : the_post(); ?>
            <h2><a href="#post-arrow" class="post-title-up"><?php esc_attr(the_title()); ?></a></h2>
            <div id="blog-images">
        <?php
        $gallery = get_post_galleries_images( $post );
        if(sizeof($gallery) > 0){
            foreach ($gallery[0] as $image) {
                $image_src = str_replace("-255x170", "", $image);
                ?>
                <img class="col-xs-12" src="<?php echo $image_src ?>" alt="" class="img-responsive">
            <?php
            }
        }
        endwhile;
        ?>
        </div>
        <div class="post">
            <div class="post-header clear">
                <div class="hidden-xs date col-xs-1">
                    <span class="day col-xs-12"><?php echo get_the_date('j'); ?></span>
                    <span class="month-year col-xs-12"><?php echo get_the_date('m'); ?>/<?php echo get_the_date('y'); ?></span>
                </div>
                <div class="visible-xs date col-xs-6">
                    <span class="xs-date col-xs-12"><?php echo get_the_date('j'); ?>/<?php echo get_the_date('m'); ?>/<?php echo get_the_date('y'); ?></span>
                </div>
                <div class="info col-xs-6 col-sm-10">
                    <h2 class="hidden-xs"><?php echo (strlen(get_the_title()) > 18) ? substr(get_the_title(), 0, 15).'...' : get_the_title(); ?></h2>
                    <?php echo do_shortcode("[really_simple_share]"); ?>
                </div>
                <div class="xs-title visible-xs col-xs-12">
                    <h2><?php echo (strlen(get_the_title()) > 18) ? substr(get_the_title(), 0, 15).'...' : get_the_title(); ?></h2>
                </div>
            </div>
            <div class="post-content">
                <?php
                    $content = esc_attr(get_the_content());
                    $content = preg_replace('/\s*\[.*\]\s*/', " ", $content);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
            </div>
            <div class="container comments">
                <a name="post-arrow"></a>
                <?php
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
                ?>
            </div>
        </div>
        <a href="#top" class="navbar-text pull-right up-arrow">
            <span class="glyphicon glyphicon-menu-up"></span>
        </a>
        <a href="#post-arrow" class="navbar-text pull-right down-arrow">
            <span class="glyphicon glyphicon-menu-down"></span>
        </a>
    </section>

<?php
get_footer();
