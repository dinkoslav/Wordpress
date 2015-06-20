<?php
/**
 * Template Name: Contacts Page
 *
 * @package WordPress
 * @subpackage The_Art_Studio
 * @since The Art Studio 1.0
 */
get_header(); ?>
<section class="container"><!-- .container -->
    <div id="contacts" class="site-main">
        <?php echo do_shortcode("[contact-form-7 id=\"170\" title=\"Contact form 1\"]"); ?>

        <div class="col-sm-6 address">
            <p><strong>Address / Адрес: </strong>...</p>
            <p><strong>Email / Ел. поща: </strong>mail@domain.com</p>
            <p><strong>Phone / Телефон: </strong>+359 88 888 88 88</p>
            <?php echo do_shortcode("[wpgmza id=\"1\"]"); ?>
        </div>
<!--        --><?php //wd_contact_form_builder(9); ?>
    </div><!-- #main -->
<?php
get_footer(); ?>