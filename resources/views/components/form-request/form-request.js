$('.button-send.form_4').on('click', function (e) {
    e.stopPropagation();

    let error = true;
    let data = {};

    $('.request-form_input').each(function (index, input) {
        data[input.name] = input.value;

        if (checkValidityInputs()){
            $('.modal-wrap').removeClass('modal-active');
        }
    });

    console.log(data)
});

function checkValidityInputs() {
    return document.querySelector('.request-form_input[name=name]').checkValidity() &&
        document.querySelector('.request-form_input[name=phone]').checkValidity() &&
        document.querySelector('.request-form_input[name=numbers]').checkValidity();
}

