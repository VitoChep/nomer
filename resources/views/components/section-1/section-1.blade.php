<section id="management" class="section-1">
    @include('components.header.header')

    <div class="background-wrapper">
        <div class="background-image">
            <div class="main-wrapper">
                <div class="management container">
                    <div class="management-menu">
                        <a href="#cost" class="management-btn">
                            <span>Стоимость</span>
                        </a>
                        <a href="#advantages" class="management-btn">
                            <span>Законность</span>
                        </a>
                        <a href="#management" class="management-btn mod-active">
                            <span>Доставка и оплата</span>
                        </a>
                        <a href="#comment" class="management-btn">
                            <span>Отзывы</span>
                        </a>
                    </div>

                    <div class="management-content">
                        <div class="management-description">
                            <h1 class="management-description-title">
                                <span>Lorem ipsum</span>
                                dolor sit amet, consectetur adipiscing</h1>

                            <p class="management-description-subtitle">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do&nbsp;eiusmod tempor
                                incididunt ut&nbsp;labore et&nbsp;dolore magna aliqua. Quis ipsum suspendisse ultrices
                                gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        </div>

                        <div class="management-forms">
                            <div class="management-form-item">
                                <span class="form-item_title">Ваше имя</span>
                                <input class="form-item_input" type="text" placeholder="Ваше имя">
                            </div>
                            <div class="management-form-item">
                                <span class="form-item_title">Телефон</span>
                                <input class="form-item_input" type="text" placeholder="Телефон">
                            </div>
                            <div class="management-form-item">
                                <span class="form-item_title">Ваши номера</span>
                                <input class="form-item_input" type="text" placeholder="Ваши номера">
                            </div>

                            @include('components.button-send.button-send', ['mod' => 'form_1'])
                        </div>
                    </div>

                    <div class="modal-wrap mod-section_1">
                        @include('components.feedback.feedback')
                        <div class="modal-blackout"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>