


    	<?php /*get_search_form(); */?>


        <div class="row">

            <aside class="col col-lg-4">
                <nav>
                    <?php wp_nav_menu(array('menu' => 'Main Nav Menu')); ?>
                </nav>

                <div class="widget">
                    <h4>Latest Blog Post</h4>

                    <?php query_posts("post_per_page=1"); the_post(); ?>
                    <div class="date"><?php the_date(); ?></div>
                    <h5><a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></h5>
                    <p><?php the_excerpt(); ?></p>

                    <?php wp_reset_query(); ?>
                </div><!--end of .widget-->



                    <!--conditional to check for fetch feed function-->
                    <?php if (function_exists('fetch_feed')) { ?>
                        <!--includes the files that enables rss feeds to work-->
                        <?php include_once(ABSPATH . WPINC . '/feed.php');

                        //retrieve rss feed
                        $feed = fetch_feed('http://www.topix.com/rss/business/manufacturing');

                        //setting number of rss items to retrieve
                        $limit = $feed->get_item_quantity(2);

                        //get rss feeds from zero up to specified limit
                        $items = $feed->get_items(0, $limit);

                        if (!$items) {

                            echo "problem";

                        } else {

                            // everything's cool, now loop through items to display rss feed

                            foreach ($items as $item) { ?>

                                <div class="widget industry">
                                    <h4>Industry News</h4>
                                    <p class="date"><?php echo $item->get_date('F j, Y'); ?></p>
                                    <h5><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h5>
                                    <p><?php echo $item->get_content(); ?></p>
                                </div><!--end of .widget .industry1-->

                            <?php }

                        } ?>

                    <?php } ?>


                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

                    <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->


                <?php endif; ?>

            </aside><!--end of aside-->



