<?php get_header(); ?>
    <div id="banner"></div>

    <div class="container marketing">
        <?php while ( have_posts() ) : the_post() ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('post-container'); ?>" >
                <h1><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_s' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                <?php if ( 'post' == get_post_type() ) : ?>
                <div class="post-meta-container text-muted">
                    Posted by <strong><?php echo the_author_link(); ?></strong> on <strong><?php echo get_the_date(); ?></strong></a>
                </div>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
            <?php
                $banner_vals = get_post_custom_values('banner');

                if($banner_vals) {
                    generate_banner_script($banner_vals[0]);
                }
            ?>
        <?php endwhile; ?>
<?php get_footer(); ?>