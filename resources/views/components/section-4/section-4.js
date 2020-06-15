
let commentMobileSwiper = false;

function initSwiper() {
    commentMobileSwiper = new Swiper ('.comment-content .swiper-container',{
        slidesPerView: 1,
        speed: 300,
        grabCursor: true,
        loop: true,
        paginationClickable: true,

        // pagination: {
        //     el: '.comment-content .swiper-container',
        //     clickable: true,
        // }
    });
}


//При загрузке страницы на разрешении только  < 1200 swiper загружается
$(window).on('load', function () {
    if ($(window).width() < 1200) {
        initSwiper();
    }
});
//При ресайзе страницы на разрешении только < 1200 swiper обновляется
$(window).on('resize', function () {
    if ($(window).width() < 1200) {
        if (commentMobileSwiper) {
            commentMobileSwiper.update();
        } else {
            initSwiper();
        }
    } else {
        if (commentMobileSwiper) {
            commentMobileSwiper.destroy();
            commentMobileSwiper = false;
        }
    }
});