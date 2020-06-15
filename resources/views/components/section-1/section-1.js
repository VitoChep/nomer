$('.management-btn').on('click', function (e) {
    $(this).parents('.management-menu').find('.management-btn').removeClass('mod-active');

    $(this).addClass('mod-active');
});