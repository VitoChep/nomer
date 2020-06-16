require('./bootstrap');

window.$=window.jQuery=require('jquery');

window.Swiper = require('../js/lib/swiper.min');

require('../views/components/footer/footer');
require('../views/components/section-1/section-1');
require('../views/components/section-3/section-3');
require('../views/components/section-4/section-4');

$('.cross-form').on('click', function (e) {
    $('.modal-wrap').removeClass('modal-active');
});

$('.modal-blackout').on('click', function (e) {
    $('.modal-wrap').removeClass('modal-active');
});