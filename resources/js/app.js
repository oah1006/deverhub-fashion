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

$(document).ready(function() {
    $('.tags-input').keypress(function(e) {
        var key = e.which;
        if (key == 13 || key == 44) {
            e.preventDefault();
            var tag = $(this).val();

            if (tag.length > 0) {
                $("<p class='px-1 py-1 bg-yellow-400 rounded-lg'>Yellow</p>").insertBefore(tag).fadeIn(100);
                $(this).val("");
                console.log('hi')
            }
        }
    })
})
