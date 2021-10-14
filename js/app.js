$(document).ready(function() {
    $('.avaliacao.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            900: {
                items: 1
            },
            1000: {
                items: 6
            }
        }
    });

    $('.medidas.owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        margin: 10,
        dots: false,
        responsive: {
            0: {
                items: 1
            }
        }
    });
    $('.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        items: 2,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 2
            },
            900: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    })


    $('.radio-group .radio').click(function() {
        $('.selected .fa').removeClass('fa-check');
        $('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

});

function menuResize() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}