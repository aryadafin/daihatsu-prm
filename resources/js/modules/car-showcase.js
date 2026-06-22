// resources/js/modules/car-showcase.js

import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export default function carShowcase() {

    const slider = document.querySelector('.unit-carousel');

    if (!slider || typeof Flickity === 'undefined') return;

    new Flickity(slider, {
        cellAlign: 'left',
        contain: true,
        wrapAround: true,
        pageDots: true,
        prevNextButtons: false
    });

}