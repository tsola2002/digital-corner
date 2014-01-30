<?php
/**
 *
 * Package: digital-corner
 * Filename: page-category.php
 * Author: solidstunna101
 * Date: 22/01/14
 * Time: 11:23
 *
 */
?>

<?php
   /*
   Template Name: Product-Category
   */
?>

<?php get_header(); ?>

<?php get_sidebar(); the_post(); ?>


<section id="main-content" class="col col-lg-6">
    <?php
        //grap custom field values
        $categoriesCF = get_post_meta($post->ID, "categories", true);
        // example value = "Sprockets|157,Sprunklers|165"

        $allCategories = explode(",", $categoriesCF);
        // $allCategories[0] = "Sprockets|157"
        // $allCategories[1] = "Sprunklers|165"

    //loop through items twice
    foreach ($allCategories as $category) {

        $pieces = explode("|", $category);
        // $pieces[0] = "Sprockets"
        // $pieces[1] = 157

        $link = get_permalink($pieces[1]);
        echo "<div class='product-group group'>";
        echo "<h3>" . $pieces[0] . "</h3>";

        //products will be published as pages & child pages of categories will be returned
        query_posts("posts_per_page=-1&post_type=page&post_parent=$pieces[1]");

        echo "<div class='row'>";
        //based on the results start a standard loop
        while (have_posts()) : the_post(); ?>
            <div class="col col-lg-3">
                <a href="<?php the_permalink(); ?>" class="product-jump" title="<?php echo "$" . get_post_meta($post->ID, "price", true); ?>" data-large="<?php /*get_post_meta($post->ID, "product_image", true);*/ ?>">

                    <?php echo "<img src='" . get_post_meta($post->ID, "product-regular", true) . "' />"; ?>
                    <span class="product-title"><?php the_title(); ?></span>
                    <span class="product-code"><?php echo get_post_meta($post->ID, "product-code", true); ?></span>

                </a>
            </div><!--end of .col-lg-3-->

        <?php endwhile; wp_reset_query();
        echo "</div><!--end of .row-->";
        echo "</div><!--end of .product-group-->";

    };


    ?>

    <div class="col-lg-2">

    </div><!--end of .col-lg-2-->

<?php get_footer(); ?>

