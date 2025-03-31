jQuery(document).ready(function($) {
    $('.owl-carousel').owlCarousel({
        loop: true, // Répète les images
        margin: 10, // Marge entre les images
        nav: true, // Flèches de navigation
        dots: true, // Points de pagination
        autoplay: true, // Démarre automatiquement
        autoplayTimeout: 3000, // Temps entre chaque image
        responsive: {
            0: { items: 1 }, // Sur mobile, affiche 1 image
            600: { items: 2 }, // Sur tablette, affiche 2 images
            1000: { items: 3 } // Sur desktop, affiche 3 images
        }
    });
});