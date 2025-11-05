<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */

$blogDefault = get_field('default_blog_image', 'options');

get_header();?>

<div class="body-container">

    <section class="blog-post">
        <div class="container">       
            <div class="content">
                <div class="main-content" id="single-post">
                <div class="spacer-60"></div>  
                <?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <article>
                        <h1><?php the_title(); ?></h1>
                        <p class="small">Posted on <?php the_date(); ?> in </span><span class="post-meta-categories"><?php the_category( ', ' ); ?></p>
                        
                        <div class="article-single-featured-image">
                            <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                            <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                                <img src="<?php echo $featImg[0]; ?>" class="article-featured-image"  />
                            <?php } else { ?>
                                <img src="<?php echo $blogDefault; ?>" id="article-featured-image-default" class="article-featured-image" >
                            <?php } ?>
                        </div>
                        <?php the_content(); ?>
                    </article>		
                    <div class="spacer-60"></div>
                    <?php endwhile; wp_reset_postdata(); ?>		
                </div>

                <div class="main-sidebar">
                    <div class="spacer-60"></div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
  jQuery(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    jQuery(".video").fitVids();
  });
</script>

<?php get_footer(); ?>