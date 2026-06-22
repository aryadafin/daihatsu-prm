import initNavbar from './modules/navbar.js';
import carShowcase from './modules/car-showcase';

import Swiper from 'swiper';
import { Pagination, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/pagination';



document.addEventListener('DOMContentLoaded', () => {

    const elements = document.querySelectorAll('.fade-up');

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                }
            });
        },
        {
            threshold: .15
        }
    );

    elements.forEach(el => observer.observe(el));

});

window.initBannerSlider = () => {

    const slider = document.querySelector('.main-carousel');

    if (!slider || typeof Flickity === 'undefined') return;

    new Flickity(slider, {
        cellAlign: 'left',
        
        wrapAround: true,
        prevNextButtons: false,
        pageDots: true,

        autoPlay: 5000,
        pauseAutoPlayOnHover: true,

        draggable: true,
        adaptiveHeight: true,

        freeScroll: false
    });

};

document.addEventListener('DOMContentLoaded', () => {

    initNavbar();

    // slider unit mobil
    carShowcase();

    // banner utama
    initBannerSlider();

    // testimonial
    new Swiper('.testimonialSwiper', {
        modules: [Pagination, Autoplay],

        loop: true,

        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        spaceBetween: 30,
    });

});