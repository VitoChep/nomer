$('.management-btn').on('click', function (e) {
    $(this).parents('.management-menu').find('.management-btn').removeClass('mod-active');

    $(this).addClass('mod-active');
});

$('.button-send.form_1').on('click', function (e) {
    e.stopPropagation();

    $('.modal-wrap.mod-section_1').toggleClass('modal-active');
});



