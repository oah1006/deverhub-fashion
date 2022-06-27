import './bootstrap';
import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 

import './store/menu.js';

var swiper = new Swiper(".mySwiper", {
    direction: "vertical",
    slidesPerView: 1,
    mousewheel: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

Alpine.start()
