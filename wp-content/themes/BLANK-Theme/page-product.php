<?php

    /*
    Template Name: Product-Page
    */

?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<section id="main-content" class="col col-lg-6 col-lg-offset-2">
    <h2 class="meta">Mega Sprocketizer</h2>

    <div class="product-info-box">
        <img src='<?php bloginfo('template_url'); ?>/images/prod-sprocketizer-large.png'/>
        <ul>
            <li><h5>Price</h5><?php echo get_post_meta($post->ID, 'price', true); ?></li>
            <li><h5>Product Code</h5><?php echo get_post_meta($post->ID, 'product-code', true); ?></li>
            <li><h5>Dimensions</h5><?php echo get_post_meta($post->ID, 'dimension', true); ?></li>
        </ul>
    </div>

    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
</section><!--end of #main-content-->

<?php get_footer(); ?>
