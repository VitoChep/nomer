
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

initSwiper();