

$(document).ready(function() {
    document.addEventListener('scroll', function (event) {
        let top = window.pageYOffset || document.documentElement.scrollTop;

        console.log(window.pageYOffset);
        if (top > 280) {
            $("#carousel").addClass("position-fixed");
            $("#carousel").addClass("fixed-top");
            $("#carousel").addClass("bg-white");
            $("#carousel-fake").addClass("show");
            $("#carousel").addClass("minify");
            $("#collapseFormato").addClass("show");
            $("#formato button").removeClass("collapsed")
        }
        if (top > 524 || top < 280) {
            $("#collapseFormato").removeClass("show");
            $("#formato button").addClass("collapsed")
            $("#carousel").removeClass("minify");
            $("#carousel").removeClass("position-fixed");
            $("#carousel").removeClass("fixed-top");
            $("#carousel").removeClass("bg-white");
            $("#carousel-fake").removeClass("show");
        }
    }, true);

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
    
    $('.avaliacao.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        items: 1,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                margin:10,
                loop:true,
                autoWidth:true,
                items: 2
            },
            900: {
                items: 3
            },
            1000: {
                items: 5
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

    $('.detalhes.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        items: 1,
        margin: 10,
        nav: true,
        dots: false,
        responsive: {
            0: {
                margin:10,
                loop:true,
                autoWidth:true,
                items: 2
            },
            900: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });
    
    $('.experimente.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        items: 1,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                margin:10,
            },
            900: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });


    $('.owl-carousel').owlCarousel({
        loop: true,
        center: true,
        items: 1,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                margin:10,
                loop:true,
                autoWidth:true,
                items: 2
            },
            900: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    $("#message a").click(function(){
        if($('#message .dropdown-message').hasClass("h-101")){
            $('#message .dropdown-message .container').addClass("delay-rapido");
            $('#message .dropdown-message').removeClass('h-101');
            $('#message .dropdown-message .container').removeClass("visible");
        }else{
            $('#message .dropdown-message .container').removeClass("delay-rapido");
            $('#message .dropdown-message').addClass('h-101');
            $('#message .dropdown-message .container').addClass("visible");
        }
    });

    function rgt() {
        $('#costurando').animate({ left: "500" }, 10000, hider);
    }
    rgt();

    function hider() {
        $('#costurando').css('left', '0px');
        rgt();
    }

    $('.radio-group .radio').click(function() {
        $('.selected .fa').removeClass('fa-check');
        $('.radio').removeClass('selected');
        $(this).addClass('selected');
    });

    $('#style').change(function() {
        window.location = '#' + $('#style').find(":selected").val(); // redirect
    });

    $('#collapseFormatoMedida .accordion-body ul li, #collapseFormatoBraco .accordion-body ul li').click(function(){
        var ul = $(this).parent();
        ul.children().each(function(index, li){
            $(li).css('border-top', '1px solid #bbbcbf');
            if($(ul.children()).length == index+1)
                $(li).css('border-bottom', '1px solid #bbbcbf');
            $(li).find('p.price').show();
            $(li).find('.fa').hide();
        });
        $(this).css('border-top', '1px solid #000');
        console.log($(this).index(), $(ul.children()).length, ($(this).index() == $(ul.children()).length-1))
        if($(this).index() == ($(ul.children()).length - 1)){
            console.log("aki");
            $(this).css('border-bottom', '1px solid #000');
        }else{
            var prox = $(this).next();
            prox.css('border-top', '1px solid #000');
        }
        $(this).find('p.price').hide();
        $(this).find('.fa').show();
    });
    $('#collapseDesign .accordion-body .cor').click(function(){
        $('#collapseDesign .accordion-body').find('.fa').each(function(index, fa){
            $(fa).hide();
        });
        $(this).parent().find('.fa').show();
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

