/**
 * Created with JetBrains PhpStorm.
 * User: solidstunna101
 * Date: 31/01/14
 * Time: 11:28
 * To change this template use File | Settings | File Templates.
 */


$("document").ready(function () {

    $("nav ul li a").append("<span>&nbsp</span>");


    $("nav ul li a").hover(function(e) {

        $(this)
            .hoverFlow(e.type, { width: 400 }, 200)
            .css('overflow', 'visible')
            .find('span')
            .hoverFlow(e.type, { width: 10 }, 200)

    }, function(e) {

        $(this)
            .hoverFlow(e.type, { width: 375 }, 200)
            .css('overflow', 'visible')
            .find('span')
            .hoverFlow(e.type, { width: 15 }, 200)

    });


});