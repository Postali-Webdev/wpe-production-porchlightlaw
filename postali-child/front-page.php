<?php
/**
 * Template Name: Front Page
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
                    <h1><?php the_field('banner_title'); ?></h1>
                    <div class="spacer-30"></div>
                    <a href="<?php the_field('banner_cta_button_link'); ?>" class="btn"><?php the_field('banner_cta_button_text'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="hp-services">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_field('services_copy'); ?>
                </div>
                <div class="column-50">
                    <div class="services-blocks">
                    <?php if( have_rows('services_blocks') ): ?>
                    <?php while( have_rows('services_blocks') ): the_row(); ?>  
                        <a href="<?php the_sub_field('service_page_link'); ?>" class="services-block">
                            <div class="service-icon">
                            <?php 
                            $icon = get_sub_field('service_icon');
                            if( !empty( $icon ) ): ?>
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                            <?php endif; ?>
                            </div>
                            <div class="service-content">
                                <p class="large"><?php the_sub_field('service_name'); ?></p> 
                                <p class="small blue"><?php the_sub_field('service_description'); ?></p>
                            </div>
                        </a>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="hp-testimonials">
        <div class="container">
            <div class="columns">
                <div class="column-full centered">
                    <h2><?php the_field('testimonials_section_title'); ?></h2>
                </div>
                <div class="spacer-30"></div>
                <?php if( have_rows('testimonials') ): ?>
                <?php while( have_rows('testimonials') ): the_row(); ?>  
                    <?php
                        $postobject = get_sub_field('testimonial');
                        $postobject->post_title //post title
                    ?>
                    <div class="column-50 testimonial">
                        <span class="icon-quote-icon"></span>
                        <p>"<?php echo $postobject->post_content; ?>"</p>
                        <p><strong><?php echo $postobject->post_title; ?></strong></p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </section>

    <section class="hp-about">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_field('about_copy'); ?>
                </div>
                <div class="column-50">
                <?php 
                $image = get_field('about_photo');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="hp-awards">
        <div class="container">
            <div class="columns">
                <div class="column-full centered">
                    <h2><?php the_field('awards_section_title'); ?></h2>
                </div>
                <div class="spacer-60"></div>
                <?php if( have_rows('awards') ): ?>
                <?php while( have_rows('awards') ): the_row(); ?>  
                    <div class="award-img">
                    <?php 
                    $award = get_sub_field('award_logo');
                    if( !empty( $award ) ): ?>
                        <img src="<?php echo esc_url($award['url']); ?>" alt="<?php echo esc_attr($award['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
                </div>
            </div>
        </div>
    </section>

    <section class="footer-cta">
        <div class="container">
            <div class="columns">
                <div class="column-full centered block">
                    <h2><?php the_field('cta_text'); ?></h2>
                    <div class="spacer-15"></div>
                    <a href="<?php the_field('cta_button_link'); ?>" class="btn yellow"><?php the_field('cta_button_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- #front-page -->

<?php get_footer();?>