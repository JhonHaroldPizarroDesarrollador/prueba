function slider() {
    $('.sliderproductos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    
    $('.sliderClientes').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows:false
    });
    
}

slider()