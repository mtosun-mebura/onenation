<?php
if (!defined('ABSPATH')) {
    exit;
}

if (has_post_thumbnail()) {
    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'fashion-featured-image-large');
} else {
    $thumbnail_url = fashion_get_placeholder_image();
}

?>
<article <?php post_class('osf-service-article column-item'); ?>>
    <div class="osf-service-article-inner">
        <div class="service-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
            </a>
        </div><!-- .service-thumbnail -->

        <div class="service-content">
            <?php the_title('<h3 class="service-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>

            <?php the_excerpt(); ?>
        </div>

        <div class="service-link-more">
            <div class="bg-footer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 410 60">
                    <path class="cls-1"
                          d="M105.5,59.988H230.717c0.138,0,.274.011,0.413,0.011a10.129,10.129,0,0,0,10.089-9.32,59.426,59.426,0,0,1,117.562,0A10.132,10.132,0,0,0,368.87,60c0.139,0,.275-0.011.413-0.011H494.5c5.5,0,10.5-4.52,10.5-10.02V-560.022c0-5.5-5-9.979-10.5-9.979h-389c-5.5,0-10.5,4.479-10.5,9.979V49.967C95,55.468,100,59.988,105.5,59.988Z"
                          transform="translate(-95)"/>
                </svg>
            </div>
            <a href="<?php the_permalink(); ?>">
                <span class="screen-reader-text"><?php esc_html_e('Explore', 'fashion'); ?></span>
                <i class="opal-icon-arrow1"></i>
            </a>
        </div>
    </div>
</article>
<!-- #post-## -->

