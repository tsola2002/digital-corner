<?php get_header(); ?>



<?php get_sidebar(); ?>


    <section id="main-content" class="col col-lg-6">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="post" id="post-<?php the_ID(); ?>">

                <h2><?php the_title(); ?></h2>

                <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

                <div class="entry">

                    <?php the_content(); ?>

                    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                </div>

                <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

            </div>

            <?php // comments_template(); ?>

        <?php endwhile; endif; ?>

    </section><!--end of #main-content-->
    <div class="col-lg-2">

    </div>



<?php get_footer(); ?>