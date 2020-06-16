<section id="cost" class="section-3">
    <div class="main-wrapper">
        <h2 class="section-title">Стоимость</h2>
        <div class="cost-content container">

            <div class="cost-content_item">
                <div class="cost_item-header">
                    <span>Lorem Ipsum</span>
                </div>

                <div class="cost_content-points">
                    <div class="cost_content-point">
                        <img class="cost_point-image" src="/images/point.png" alt="point">
                        <p class="cost_point-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&nbsp;eiusmod
                            tempor</p>
                    </div>
                    <div class="cost_content-point">
                        <img class="cost_point-image" src="/images/point.png" alt="point">
                        <p class="cost_point-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&nbsp;eiusmod
                            tempor</p>
                    </div>
                    <div class="cost_content-point">
                        <img class="cost_point-image" src="/images/point.png" alt="point">
                        <p class="cost_point-text">Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>

                <div class="price-wrapper">
                    <p class="price-item_before">399 грн</p>
                    <p class="price-item_after"><span class="price-item_number">299 </span>грн</p>
                </div>

                @include('components.button-send.button-send', ['mod' => 'form_2'])
            </div>

            <div class="cost-content_item">
                <div class="cost_item-header">
                    <span>Lorem Ipsum</span>
                </div>

                <div class="cost_content-points">
                    <div class="cost_content-point">
                        <img class="cost_point-image" src="/images/point.png" alt="point">
                        <p class="cost_point-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&nbsp;eiusmod
                            tempor</p>
                    </div>
                    <div class="cost_content-point">
                        <img class="cost_point-image" src="/images/point.png" alt="point">
                        <p class="cost_point-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&nbsp;eiusmod
                            tempor</p>
                    </div>
                    <div class="cost_content-point">
                        <img class="cost_point-image" src="/images/point.png" alt="point">
                        <p class="cost_point-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do&nbsp;eiusmod
                            tempor</p>
                    </div>
                </div>

                <div class="price-wrapper">
                    <p class="price-item_before">599 грн</p>
                    <p class="price-item_after"><span class="price-item_number">499 </span>грн</p>
                </div>

                @include('components.button-send.button-send',  ['mod' => 'form_2'])
            </div>

            <div class="modal-wrap mod-section_3">
                @include('components.form-request.form-request')
                <div class="modal-blackout"></div>
            </div>
        </div>
    </div>
</section>