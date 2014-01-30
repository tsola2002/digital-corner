<?php
/**
 *
 * Package: digital-corner
 * Filename: home.php
 * Author: solidstunna101
 * Date: 08/01/14
 * Time: 21:25
 *
 */
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

    <section id="main-content" class="col col-lg-6">
        <p id="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aut deleniti ducimus fugiat libero nesciunt porro praesentium recusandae.
            Ab assumenda deleniti, dolorum error iusto laboriosam libero nemo non possimus,
            quasi repellendus!</p>

        <blockquote id="main-quote">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Beatae deleniti dicta dolor doloremque dolorum earum eius eum illo impedit in ipsam,
            libero neque nisi nulla quaerat, rem tempore temporibus veniam.
            <cite>Frankiln James, In too deep</cite>
        </blockquote>

        <h2>Featured Widgets</h2>
        <ul>
            <li>
                <h3>Super Sprocket</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Amet dolor eius impedit labore optio quaerat velit veniam?
                    Doloremque est eveniet exercitationem facere fugit iusto,
                    maxime praesentium repudiandae, sapiente soluta, voluptates.</p>
                <img src="_/img/sprocket.png" alt=""/>
                <a class="btn btn-info" href="">View Product</a>
            </li>
        </ul>
    </section><!--end of #main-content-->
    <div class="col-lg-2">

    </div><!--end of .col-lg-2-->

<?php get_footer(); ?>