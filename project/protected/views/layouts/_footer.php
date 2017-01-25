 <section>
        <div class="target-map">
            <p class="text-target">
                <span class="text-tg1">Conjunto resindecial</span>
                <span class="text-tg2">El Madrigal</span>
                <span class="text-tg3">Cra. 3 No. 11 - 05</span>
                <span class="text-tg4">La Vega - Cundinamarca</span>
            </p>
        </div>
        <div id="map" class="map">

        </div>
</section>
<footer class="principal-footer limiter-container">
    <div class="line-box">
        <section class="line contact-area">
            <header>
                <div class="limiter-container">
                    <h1 class="text-pink">
                    <span><img src="images/icon-contact-fo.svg" alt="Contacto" class="to-svg"></span>
                    CONTACTO
                    </h1>
                </div>
            </header>
            <div class="info-contact">
                <div class="limiter-container">
                    <h3 class="text-pink">Teléfonos</h3>
                    <div class="line-box contact__footer">
                        <div class="line">
                            <strong>Celular:</strong>
                            <?php $celular_uno = GeneralValue::model()->findByPk(8); ?>
                            <p><?php echo $celular_uno->value; ?></p>
                            <?php $celular_dos = GeneralValue::model()->findByPk(9); ?>
                            <p><?php echo $celular_dos->value; ?></p>
                        </div>
                        <div class="line">
                            <strong>Fijo:</strong>
                            <?php $phoneContact = GeneralValue::model()->findByPk(2); ?>
                            <p><?php echo $phoneContact->value ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-contact contact__footer">
                <div class="limiter-container">
                    <h3 class="text-pink" style="margin-bottom: 0px;">Correo electrónico:</h3>
                    <?php $emailContact = GeneralValue::model()->findByPk(1); ?>
                    <p><?php echo $emailContact->value; ?></p>
                </div>
            </div>
            <div class="line social icon-footer">
                <a href="#" target="_blank">
                    <img class="icon-foo" src="images/icon-facebook-fo.svg" alt="Facebok" class="to-svg">
                </a>
                <a href="#" target="_blank">
                    <img class="icon-foo" src="images/icon-youtube-fo.svg" alt="Pinterest" class="to-svg">
                </a>
            </div>
        </section>
        <section class="line contact-colaborations">
            <div class="limiter-container">
                <div>
                    <p class="line-pink">Ventas: <b>Av. 19 No. 97 - 31 oficina 501</b></p>
                </div>
                <div class="line-box" style="margin-top: 50px;">
                    <aside class="line">
                        <h4>Construye</h4>
                        <div class="logo">
                            <img src="images/logo.png" alt="Vihara">
                        </div>
                    </aside>
                    <aside class="line">
                        <h4>Comercializa</h4>
                        <div class="logo"></div>
                        <div class="logo">
                            <img src="images/logo-alcazar.png" alt="Alcázar">
                        </div>
                    </aside>
                    <aside class="line">
                        <h4>Supervisa</h4>
                        <div class="logo"></div>
                        <div class="logo">
                            <img src="images/logo-alianza.png" alt="Alianza">
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </div>
</footer>