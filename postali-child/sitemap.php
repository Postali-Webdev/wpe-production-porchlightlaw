<?php
/**
 * Template Name: Sitemap
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

    <section class="interior-content">
        <div class="container">
            <div class="columns">
                <?php if (have_posts()) : 
		        while (have_posts()) : the_post(); ?>
					<div class="column-50 block">
                        <h2>Pages</h2> 
                        <ul class="sitemap">
                            <?php $args = [
                                'sort_column' => 'post_title',
                                'title_li' => '',
                            ];
                            wp_list_pages( $args ); ?>
                        </ul> 
                    </div>
					<div class="column-50 block">
                        <h2>Blog Posts</h2> 
                        <ul class="sitemap">
                            <?php wp_get_archives('type=postbypost'); ?>
                        </ul>
                    </div>
                <?php endwhile; ?>
	            <?php endif; ?>
            </div>
        </div>
    </section>



</div><!-- #front-page -->

<?php get_footer();?>