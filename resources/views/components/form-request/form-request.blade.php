<div class="form-request">
    <h3 class="form-request_title">Заявка</h3>

    @include('components.cross-form.cross-form')
    <div class="request-content">
        <div class="request-form_wrapper">
                <input class="request-form_input" required name="name" type="text" placeholder="Ваше имя">
                <input class="request-form_input" required name="phone" type="text" placeholder="Телефон">
                <input class="request-form_input" required name="numbers" type="text" placeholder="Ваши номера">
        </div>

        @include('components.button-send.button-send', ['mod' => 'form_4'])
    </div>
</div>
