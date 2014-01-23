<?php get_header(); the_post(); ?>

    <div class="row">
        <div class="col col-lg-12 meta">
            <h2 id="post-title"><?php the_title(); ?></h2>
        </div>
    </div>

    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

    <!--<div class="row">
        <div class="col col-lg-12 meta2">
            <em>Posted on:</em> April 10th, 2010 &emsp; &emsp;
            <em>by</em> Omatsola Isaac Sobotie
        </div>
    </div>-->

<?php get_sidebar(); ?>

    <section id="main-content" class="col col-lg-6">
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

            <div class="entry">

                <?php the_content(); ?>

                <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

                <?php the_tags( 'Tags: ', ', ', ''); ?>

            </div>

            <?php edit_post_link('Edit this entry','','.'); ?>

        </div>
    </section><!--end of #main-content-->
    <div class="col-lg-2">

    </div>



<?php get_footer(); ?>