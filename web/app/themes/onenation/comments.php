<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area content-boxed">

    <?php

    // You can start editing here -- including this comment!
    if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            printf( __('%s Comments','fashion'), $comments_number );
            ?>
        </h2>
        <ol class="comment-list" data-opal-customizer="otf_comment_template">
            <?php
            wp_list_comments( array(
                'avatar_size' => 100,
                'style'       => 'ol',
                'short_ping'  => true,
                'reply_text'  => esc_html__( 'Reply', 'fashion' ),
            ) );
            ?>
        </ol>

        <?php the_comments_pagination( array(
            'prev_text'          => '<span>' . esc_html__( 'Prev', 'fashion' ) . '</span>',
            'next_text'          => '<span>' . esc_html__( 'Next', 'fashion' ) . '</span>',
        ) );

    endif; // Check for have_comments().

    $comments_args = array(
        // Redefine your own textarea (the comment body).
        'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun', 'fashion' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="4" maxlength="65525" required="required" placeholder="' . esc_attr__( "Comment", "fashion" ) . '"></textarea></p>',
    );
    comment_form( $comments_args );


    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' )) : ?>

        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'fashion' ); ?></p>
        <?php
    endif;

    ?>

</div><!-- #comments -->
