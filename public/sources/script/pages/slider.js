// slider
let brandHome = new Swiper("#banner-home", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

let project = new Swiper("#project-slider", {
    loop: false,
    navigation: {
        nextEl: ".swiper-next",
        prevEl: ".swiper-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
        1000: {
            slidesPerView: 3.5,
            spaceBetween: 30,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});

let nahad = new Swiper("#nahad-slider", {
    loop: false,
    navigation: {
        nextEl: ".swiper-next-nahad",
        prevEl: ".swiper-prev-nahad",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
        1000: {
            slidesPerView: 3.5,
            spaceBetween: 30,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});

let business = new Swiper("#business-slider", {
    loop: false,
    navigation: {
        nextEl: ".swiper-next-business",
        prevEl: ".swiper-prev-business",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
        1000: {
            slidesPerView: 3.5,
            spaceBetween: 30,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
    },
});

let brandSwiper = new Swiper(".brand-carousel", {
    slidesPerView: 3,
    breakpoints: {
        320: {
            slidesPerView: 3,
            spaceBetween: 5
        },
        640: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 50,
        }
    },
});

let news = new Swiper(".news-slider", {
    loop: true,
    navigation: {
        nextEl: ".news-next",
        prevEl: ".news-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
        1000: {
            slidesPerView: 3.5,
            spaceBetween: 30,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
    },
});

let blog = new Swiper(".blog-slider", {
    loop: true,
    navigation: {
        nextEl: ".blog-next",
        prevEl: ".blog-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1.2,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2.5,
            spaceBetween: 30,
        },
        1000: {
            slidesPerView: 3.5,
            spaceBetween: 30,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 10,
        },
    },
});
