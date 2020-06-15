$('.management-btn').on('click', function (e) {
    $(this).parents('.management-buttons').find('.management-btn').removeClass('mod-active');

    $(this).addClass('mod-active');
});