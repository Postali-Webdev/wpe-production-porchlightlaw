<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<?php if (has_post_thumbnail()) {
    $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
    echo '<link rel="preload" as="image" href="'.$attachment_image.'">';
    echo '<link rel="preload" as="image" href="'.$attachment_image.'.webp">';
} ?>

<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TSMNHF9');</script>
<!-- End Google Tag Manager -->

<!-- Add JSON Schema here -->
<?php 
// Global Schema
$global_schema = get_field('global_schema', 'options');
if ( !empty($global_schema) ) :
    echo '<script type="application/ld+json">' . $global_schema . '</script>';
endif;

// Single Page Schema
$single_schema = get_field('single_schema');
if ( !empty($single_schema) ) :
    echo '<script type="application/ld+json">' . $single_schema . '</script>';
endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet"> 
</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSMNHF9"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

    <script src="//www.apexchat.net/scripts/invitation.ashx?company=porchlight"async></script>

	<header>
        <div id="header-utility">
            <div class="container">
                <div class="utility-left">
                    <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Porchlight Law Today" class="utility-phone"><?php the_field('global_phone','options'); ?></a> &nbsp; 
                    <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Porchlight Law Today" class="utility-email"><?php the_field('global_email','options'); ?></a>
                </div>
                <div class="utility-right">
                    <?php if(get_field('social_facebook','options')) { ?>
                        <div class="social-icon" id="facebook"><a href="<?php the_field('social_facebook','options'); ?>" title="Follow us on Facebook" target="blank"><span class="icon-facebook"></span></a></div>
                    <?php } ?>

                    <?php if(get_field('social_twitter','options')) { ?>
                        <div class="social-icon" id="twitter"><a href="<?php the_field('social_twitter','options'); ?>" title="Follow us on Twitter" target="blank"><span class="icon-twitter"></span></a></div>
                    <?php } ?>

                    <?php if(get_field('social_instagram','options')) { ?>
                        <div class="social-icon" id="instagram"><a href="<?php the_field('social_instagram','options'); ?>" title="Follow us on Instagram" target="blank"><span class="icon-instagram"></span></a></div>
                    <?php } ?>

                    <?php if(get_field('social_linkedin','options')) { ?>
                        <div class="social-icon" id="linkedin"><a href="<?php the_field('social_linkedin','options'); ?>" title="Follow us on LinkedIn" target="blank"><span class="icon-linkedin"></span></a></div>
                    <?php } ?>
                </div>
            </div>
        </div>

		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>
			
			<div id="header-top_right">
				<div id="header-top_menu">
						<?php
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav'
							);
							wp_nav_menu( $args );
						?>			
					<div id="header-top_mobile">
						<div id="menu-icon" class="toggle-nav">
							<span class="line line-1"></span>
							<span class="line line-2"></span>
							<span class="line line-3"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
