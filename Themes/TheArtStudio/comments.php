<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage The_Art_Studio
 * @since The Art Studio 1.0
 */

?>

<div id="comments" class="comments-area">

    <?php
    wp_list_comments('type=comment&callback=mytheme_comment');

    $fields =  array(

        'author' =>
            '<label for="author" class="control-label">Name / Име </label></br>
            <input id="author" aria-required="true" type="text" name="author" placeholder="Your name" class="form-control"></br>',

        'email' =>
            '<label for="email" class="control-label">Email / Ел. поща</label></br>
            <input id="email" aria-required="true" type="email" name="email" placeholder="Your E-mail" class="form-control"></br>',
        'url' => ''
    );

    $args = array(
        'id_form'           => 'commentform',
        'id_submit'         => 'submit',
        'class_submit'      => 'submit',
        'name_submit'       => 'submit',
        'title_reply'       => __( 'Leave a Reply? / Напиши отговор?' ),
        'format'            => 'xhtml',

        'comment_field' =>  '<label for="comment" class="control-label">Comment / Коментар </label></br>
            <textarea id="comment" name="comment" aria-required="true" placeholder="Place your text here ..." class="form-control"></textarea></br>',

        'must_log_in' => '',

        'logged_in_as' => '',

        'comment_notes_before' => '',

        'comment_notes_after' => '',

        'label_submit'=>'Submit / Изпрати',

        'fields' => apply_filters( 'comment_form_default_fields', $fields )
    );
    ?>
    <div class="clear"></div>
    <div class="navigation">
        <?php
        //Create pagination links for the comments on the current post, with single arrow heads for previous/next
        paginate_comments_links( array('prev_text' => '&lsaquo;&lsaquo;  ', 'next_text' => '  &rsaquo;&rsaquo;'));
        ?>
    </div>
    <?php comment_form($args); ?>
</div><!-- #comments -->
