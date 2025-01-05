$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

    // Initialise GLightbox
    const lightbox = GLightbox({
        selector: '.glightbox'
    });
});


//Slick 
$(document).ready(function () {
    $('#reviews').slick({
        dots: false,
        infinite: true, 
        autoplay: true, 
        speed: 1500,
        slidesToShow: 1,
        adaptiveHeight: true
    });
});
  
