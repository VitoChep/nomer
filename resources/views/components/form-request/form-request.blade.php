<div class="form-request">
    <h3 class="form-request_title">Заявка</h3>
    <svg class="cross-form">
        <use xlink:href="#crossLight"></use>
    </svg>
    <div class="request-content">
        <div class="request-form_wrapper">
                <input class="request-form_input" type="text" placeholder="Ваше имя">
                <input class="request-form_input" type="text" placeholder="Телефон">
                <input class="request-form_input" type="text" placeholder="Ваши номера">
        </div>

        @include('components.button-send.button-send')
    </div>
</div>
