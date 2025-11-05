<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

    <section class="footer">
        <div class="container">
            <div class="columns">
                <div class="column-25 block">
                    <p class="large blue"><strong>Contact Us</strong></p>
                    <p>
                        <span class="icon-phone-icon"></span> <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Porchlight Law Today"><?php the_field('global_phone','options'); ?></a><br>
                        <span class="icon-email-icon"></span> <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Porchlight Law Today"><?php the_field('global_email','options'); ?></a>
                    </p>
                    <p><?php the_field('address','options'); ?></p>
                </div>
                <div class="column-25">
                    <p class="large blue"><strong>Disclaimer</strong></p>
                    <p class="small"><?php the_field('disclaimer_text','options'); ?></p>
                </div>
                <div class="column-50">
                    <iframe src="<?php echo get_field('map_embed','options'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <div id="footer-utility">
            <div class="container">
                <div class="utility-left">
                    <p class="copyright">©<?php echo date('Y'); ?> Porchlight Law. All Rights Reserved.</p>
                </div>

                <?php if(is_page_template('front-page.php')) { ?>
                <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag-reversed.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:0 auto;"></a>
                <?php } ?>
                
                <div class="utility-right">
                    <?php if(get_field('social_facebook','options')) { ?>
                        <div class="social-icon"><a href="<?php the_field('social_facebook','options'); ?>" title="Follow us on Facebook" target="blank"><span class="icon-facebook"></span></a></div>
                    <?php } ?>

                    <?php if(get_field('social_twitter','options')) { ?>
                        <div class="social-icon"><a href="<?php the_field('social_twitter','options'); ?>" title="Follow us on Twitter" target="blank"><span class="icon-twitter"></span></a></div>
                    <?php } ?>

                    <?php if(get_field('social_instagram','options')) { ?>
                        <div class="social-icon"><a href="<?php the_field('social_instagram','options'); ?>" title="Follow us on Instagram" target="blank"><span class="icon-instagram"></span></a></div>
                    <?php } ?>

                    <?php if(get_field('social_linkedin','options')) { ?>
                        <div class="social-icon"><a href="<?php the_field('social_linkedin','options'); ?>" title="Follow us on LinkedIn" target="blank"><span class="icon-linkedin"></span></a></div>
                    <?php } ?>
                </div>
            </div>
        </div>

</footer>

<script type="text/javascript" src="//cdn.callrail.com/companies/765914314/c2857d08b148305110ad/12/swap.js"></script> 

<?php wp_footer(); ?>
</body>
</html>


