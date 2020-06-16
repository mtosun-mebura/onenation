<div class="site-header">
    <?php
    if (fashion_is_header_builder()) {
        fashion_the_header_builder();
    } else {
        $container = get_theme_mod('osf_header_width', false) ? 'container-fluid' : 'container';
        ?>
        <div id="opal-header-content" class="header-content">
            <div class="custom-topbar <?php echo esc_attr($container) ?>">
                <div class="topbar-main-content">
                    <div class="d-flex align-items-center justify-content-between ">
                        <div class="topbar-right">
                            <div class="topbar-search">
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-header <?php echo esc_attr($container) ?>">
                <div class="header-main-content <?php echo get_theme_mod('osf_header_layout_is_sticky', false) ? ' opal-element-sticky' : ''; ?>">
                    <?php get_template_part('template-parts/header/site', 'branding'); ?>
                    <?php if (has_nav_menu('top')) : ?>
                        <div class="navigation-top">
                            <?php get_template_part('template-parts/header/navigation'); ?>
                        </div><!-- .navigation-top -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
