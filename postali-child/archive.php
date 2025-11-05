<?php
/**
 * Post Archive
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="body-container">

    <?php $banner_bg = get_field('header_image','options') ?>
    <section class="page-banner" style="background: url('<?php echo $banner_bg; ?>' ) no-repeat;">
        <div class="container blog-posts">
            <div class="columns">
                <div class="column-full">
                    <h1>Legal Blog</h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="columns">
            <?php while( have_posts() ) : the_post(); ?>
                <div class="post-holder">
                    <?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                    <div class="column-50 blog-photo" style="background: url('<?php echo esc_attr( $background_img[0] ); ?>' ) no-repeat;"></div>
                    <div class="column-50">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn read-more">Read More</a>
                    </div>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>    
            </div>
        </div>
    </section>
    
    <section class="pagination">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php the_posts_pagination(); ?>
                </div>
            </div>
        </div>
    </section>

</div>

<?php get_footer(); ?>
