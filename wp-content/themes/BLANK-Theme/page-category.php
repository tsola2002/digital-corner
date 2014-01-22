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

<?php get_sidebar(); ?>


<section id="main-content" class="col col-lg-6">
    <div class='product-group group'>

        <h3><a href='#'>Sprockets</a></h3>

        <div class="row">
            <div class="col col-lg-3">
                <a href="#" class="product-jump" title="$519.00">
                    <img src='_/img/prod-sprocketizer.png' />
                    <span class="product-title">Mega Sprocketizer</span>
                    <span class="product-code">WGA-998-d</span>
                </a>
            </div>
            <div class="col col-lg-3 pull-right">
                <a href="#" class="product-jump" title="$199.99">
                    <img src='_/img/prod-sprunkler.png' />
                    <span class="product-title">Super Sprocket 1000</span>
                    <span class="product-code">WGA-195-c</span>
                </a>
            </div>
        </div>




    </div>

    <div class='product-group group'>

        <h3><a href='#'>Sprunklers</a></h3>

        <a href="#" class="product-jump" title="$238.99">
            <img src='_/img/prod-supersprocket.png' />
            <span class="product-title">Triple Sprunkler</span>
            <span class="product-code">ABC-19-hj4</span>
        </a>

    </div>

</section><!--end of #main-content-->
<div class="col-lg-2">

</div><!--end of .col-lg-2-->

<?php get_footer(); ?>

