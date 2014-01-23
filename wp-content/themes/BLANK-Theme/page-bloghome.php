<?php
/**
 *
 * Package: digital-corner
 * Filename: page-bloghome.php
 * Author: solidstunna101
 * Date: 23/01/14
 * Time: 15:34
 *
 */
?>
<?php

/*
  Template Name: Page-Bloghome
  */

?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

    <section id="main-content" class="col col-lg-6">
        <h1 class="giant">The Digital Realm</h1>
        <?php query_posts("posts_per_page=5"); ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>

                <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

                <div class="entry">
                    <?php the_content(); ?>
                </div>

            </div>

        <?php endwhile; ?>

            <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

        <?php else : ?>

            <h2>Not Found</h2>

        <?php endif; ?>


    </section><!--end of #main-content/ .col-lg6-->

    <div class="col-lg-2">

    </div><!--end of col-lg-2-->

<?php get_footer(); ?>