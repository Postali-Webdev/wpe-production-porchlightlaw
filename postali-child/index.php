<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$args = array (
    'post_type' => 'post',
    'post_per_page' => '10',
    'post_status' => 'publish',
    'order' => 'DESC',
    'paged' => $paged,
);
$wp_query = new WP_Query($args);

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
            <?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <div class="post-holder">
                    <?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                    <div class="column-50 blog-photo" style="background: url('<?php echo esc_attr( $background_img[0] ); ?>' ) no-repeat;"></div>
                    <div class="column-50">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><h2><?php the_title(); ?></h2></a>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn read-more" title="<?php the_title(); ?>">Read More</a>
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
