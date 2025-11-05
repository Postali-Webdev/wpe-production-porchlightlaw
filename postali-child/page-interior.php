<?php
/**
 * Template Name: Interior
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php $banner_bg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

    <?php if (get_field('add_cta')) { ?>    
    <section class="page-banner cta">
        <div class="container">
            <div class="columns">
                <div class="column-50 banner-photo"  style="background: url('<?php echo esc_attr( $banner_bg[0] ); ?>' ) no-repeat;"></div>
                <div class="column-50 banner-text block">
                    <h1><?php the_title(); ?></h1>
                    <?php the_field('header_cta'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php } else { ?>

    <section class="page-banner" style="background: url('<?php echo esc_attr( $banner_bg[0] ); ?>' ) no-repeat;">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="interior-content">
        <div class="container">
            <div class="columns">
                <div class="column-75 block center">
                <?php while( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>  
                </div>
            </div>
        </div>
    </section>
    
</div>

<?php get_footer(); ?>
