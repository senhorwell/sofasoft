$(document).ready(function() {
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
                items: 4
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