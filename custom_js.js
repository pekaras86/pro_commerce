// =========================== Plain Javascript ============================ //

//Hidden side bar navigation for products.php
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

// =============================== JQuery ================================== //

$(document).ready(function() {


    // Shoe preview for description.php
    $(".shoe-side").click(function() {

        var image_src = $(this).attr('src');

        $(".image-shoe-desc").attr('src', image_src);

    }); // .click




    // Carousel
    $('#myCarousel').carousel({
        interval: 10000
    })
    $('.carousel .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    }); // .each




    //Hide and show vertical brand
    $(".hide-brand").click(function() {
        $(".vertical-brand").toggle();
    }); // .click




    //Hover dropdown menus
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    ); // .hover


    //Revolution Slider
    jQuery("#slider1").revolution({
      sliderType:"standard",
      sliderLayout:"auto",
      delay:9000,
      navigation: {
          arrows:{enable:true}
      },
      gridwidth:1200,
      gridheight:500
    });



}); // .ready
