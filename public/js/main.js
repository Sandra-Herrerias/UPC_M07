
document.addEventListener("DOMContentLoaded", function () {
    if (window.location.pathname == '/index' || window.location.pathname == '/') {
        document.addEventListener("mousemove", function (e) {
            var width = window.innerWidth,
                height = window.innerHeight,
                positionX = (e.clientX / width) - 0.55,
                positionY = (e.clientY / height) - 0.55;


            gsap.to(".image_box img", {
                rotationY: positionX * 90,
                rotationX: positionY * 90,
                ease: "none"
            });
        })
    }
    if (window.location.pathname == '/comments') {
        var silder = $(".owl-carousel");
        silder.owlCarousel({
            autoPlay: false,
            items: 1,
            center: false,
            nav: true,
            margin: 40,
            dots: false,
            loop: true,
            responsive: {
                0: {
                    items: 1,
                },
                575: { items: 1 },
                768: { items: 2 },
                991: { items: 3 },
                1200: { items: 4 }
            }
        });
    }


    //   gsap.to('#img-titulo', {
    //     duration: 2.5,
    //     ease: "power2.out",
    //     x: 300
    //  });
});