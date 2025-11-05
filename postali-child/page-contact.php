<?php
/**
 * Template Name: Contact
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <?php $banner_bg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
    <section class="page-banner" style="background: url('<?php echo esc_attr( $banner_bg[0] ); ?>' ) no-repeat;">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="columns">
                <?php while( have_posts() ) : the_post(); ?>
                <div class="column-75 block">
                    <?php the_content(); ?>
                </div>
                <div class="column-25 block sidebar">
                    <p class="large blue"><strong>Contact Us</strong></p>
                    <p>
                        <span class="icon-phone-icon"></span> <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Porchlight Law Today"><?php the_field('global_phone','options'); ?></a><br>
                        <span class="icon-email-icon"></span> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Porchlight Law Today"><?php the_field('global_email','options'); ?></a>
                    </p>
                    <p><?php the_field('address','options'); ?></p>
                </div>
                <?php endwhile; ?>  
            </div>
        </div>
    </section>
    
</div>

<?php get_footer(); ?>
