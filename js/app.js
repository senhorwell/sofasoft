

$(document).ready(function() {

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
    })

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

