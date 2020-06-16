<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="post-inner">

        <?php if ('' !== get_the_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('fashion-featured-image-full'); ?>
                </a>
            </div><!-- .post-thumbnail -->
        <?php endif; ?>

        <header class="entry-header">
            <?php

            if (is_single()) {
                the_title('<h1 class="entry-title">', '</h1>');
            } elseif (is_front_page() && is_home()) {
                the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
            } else {
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            }
            ?>

            <div class="entry-meta">
                <?php fashion_time_link(); ?>
            </div><!-- .entry-meta -->

        </header><!-- .entry-header -->

        <div class="entry-content">
            <div class="content-boxed">
                <?php

                /* translators: %s: Name of current post */
                the_content(sprintf(
                    __('Read more <span class="screen-reader-text"> "%s"</span> <i class="opal-icon-long-arrow-right" aria-hidden="true"></i> ', 'fashion'),
                    get_the_title()
                ));

                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'fashion'),
                    'after' => '</div>',
                    'link_before' => '<span class="page-number">',
                    'link_after' => '</span>',
                ));

                ?>
            </div>
        </div><!-- .entry-content -->

        <?php
        if (is_single()) {
            fashion_entry_footer();
            fashion_social_share();
        }
        ?>
    </div>

</article><!-- #post-## -->