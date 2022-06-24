function sliderComercial(){
    const sliderIndex = document.querySelector('.slider-index');
    if(sliderIndex){
        $('.slider-index').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })
    }

    const sliderSeleccion= document.querySelector('#owl-carousel-seleccion');
    if(sliderSeleccion){
        $('#owl-carousel-seleccion').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        })
    }
}