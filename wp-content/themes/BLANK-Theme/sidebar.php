<aside>


    	<?php get_search_form(); ?>


        <div class="row">

        <aside class="col col-lg-4">
            <nav>
                <ul>
                    <li><a href="#">Our Products <span></span></a></li>
                    <li><a href="#">About Digital Corner <span></span></a></li>
                    <li><a href="#">Contact Us <span></span></a></li>
                </ul>
            </nav>

            <div class="widget">
                <h4>Latest Blog Post</h4>

                <div class="date">December 28th, 2013</div>
                <h5>This just in, dont get gremlins wet!!</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Alias asperiores eius incidunt nam officia perferendis unde?
                    Dolorum in non repellat saepe voluptatum. Deleniti,
                    dolore eos facilis libero numquam quas similique?</p>


            </div><!--end of .widget-->

            <div class="widget industry">
                <h4>Industry News</h4>

                <div class="date">December 28th, 2013</div>
                <h5>this just in, dont get gremlins wet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Alias asperiores eius incidunt nam officia perferendis unde?
                    Dolorum in non repellat saepe voluptatum. Deleniti,
                    dolore eos facilis libero numquam quas similique?</p>
            </div><!--end of widget-->

            <div class="widget industry">
                <h4>latest post</h4>

                <div class="date">December 28th, 2013</div>
                <h5>This just in, dont get gremlins wet</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Alias asperiores eius incidunt nam officia perferendis unde?
                    Dolorum in non repellat saepe voluptatum. Deleniti,
                    dolore eos facilis libero numquam quas similique?</p>
            </div><!--end of widget-->
        </aside><!--end of aside-->

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>

        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->


    <?php endif; ?>

</aside>