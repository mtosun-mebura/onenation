<div class="column-item post-style-1">
    <div class="post-inner ">
        <div class="post-content">
            <div class="entry-header">
                <h3 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="entry-meta ">
                    <?php fashion_time_link(); ?>
                </div>
            </div>

            <div class="entry-content">
                <?php echo wp_trim_words(get_the_content(), 20); ?>
            </div>
            <div class="more-link-wrap">
                <a href="<?php the_permalink(); ?>" class="more-link">
                    Read more
                    <i class="opal-icon-long-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div>