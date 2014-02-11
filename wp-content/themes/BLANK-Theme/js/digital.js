/**
 * Created with JetBrains PhpStorm.
 * User: solidstunna101
 * Date: 31/01/14
 * Time: 11:28
 * To change this template use File | Settings | File Templates.
 */


$("document").ready(function () {

   // $("nav ul li a").append("<span>&nbsp</span>");

    $("nav ul li:nth-child(1) a").prepend('<span class="glyphicon glyphicon-home"></span> ');
    $("nav ul li:nth-child(2) a").prepend('<span class="glyphicon glyphicon-info-sign"></span> ');
    $("nav ul li:nth-child(3) a").prepend('<span class="glyphicon glyphicon-phone-alt"></span> ');
    $("nav ul li:nth-child(4) a").prepend('<span class="glyphicon glyphicon-shopping-cart"></span> ');
    $("nav ul li:nth-child(5) a").prepend('<span class="glyphicon glyphicon-comment"></span> ');



    /* $("nav ul li a").hover(function(e) {

         $(this)
             .hoverFlow(e.type, { width: 380 }, 200)
             .css('overflow', 'visible')
             .find('span')
             .hoverFlow(e.type, { width: 10 }, 200)

     }, function(e) {

         $(this)
             .hoverFlow(e.type, { width: 375 }, 200)
             .css('overflow', 'visible')
             .find('span')
             .hoverFlow(e.type, { width: 15 }, 200)

     });*/


});