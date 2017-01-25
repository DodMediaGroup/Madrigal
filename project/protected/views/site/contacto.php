<?php $this->renderPartial('//layouts/_header'); ?>
<section class="content" style="margin-top: 150px;">
    <div class="limiter-container content-project">
        <div class="items">
            <div class="item wow fadeInUp">
                <p style="color: #F7CE10;"><strong>Contacto</strong></p>
            </div>
        </div>
    </div>
    <div class="content-contact">
        <div class="back-image-brow">
            <div class="yellow-transp">
                <form action="#" id="contact">
                    <div class="header-contact">
                        <img src="images/icon-message.svg" alt="">
                        <p>Déjenos sus datos y un agente de ventas de nuestro proyecto se comunicará con usted para darle toda la información.</p>
                    </div>
                    <div class="line-box form-input">
                        <div class="line">
                            <input type="text" name="name" placeholder="Nombre:" class="input" required>
                            <input type="text" name="lastname" placeholder="Apellido:" class="input" required>
                            <input type="phone" name="phone" placeholder="Teléfono:" class="input">
                            <input type="phone" name="cel" placeholder="Celular:" class="input" required>
                            <input type="text" name="address" placeholder="Dirección:" class="input">
                            <input type="email" name="email" placeholder="Correo electrónico:" class="input" required>
                        </div>
                        <div class="line">
                            <textarea name="message" placeholder="Mensaje" required></textarea>
                            <div class="form-input">
                                <button type="submit">Enviar</button>
                            </div>
                        </div>
                    </div>
                    <div class="header-contact">
                        <img src="images/icon-message2.svg" alt="">
                        <p>O comuníquese con nosotros a travéz de otros medios de comunicación.</p>
                    </div>
                    <div class="content-info-contact">
                        <div class="column-contact">
                            <h4 class="text-pink">Teléfonos</h4>
                            <div class="line-box-contact numbers-contact" >
                                <strong>Celulares:</strong>
                                <?php $celular_uno = GeneralValue::model()->findByPk(8); ?>
                                <p><?php echo $celular_uno->value; ?></p>
                                <?php $celular_dos = GeneralValue::model()->findByPk(9); ?>
                                <p><?php echo $celular_dos->value; ?></p>
                                <strong>Fijo:</strong>
                               <?php $phoneContact = GeneralValue::model()->findByPk(2); ?>
                                <p><?php echo $phoneContact->value ?></p>
                            </div>
                        </div>
                        <div class="column-contact">
                            <div class="line-box-contact">
                                <h4 class="text-pink">Correos electrónicos</h4>
                                <p>comercial@alcazarfincaraiz.com</p>
                                 <?php $emailContact = GeneralValue::model()->findByPk(1); ?>
                                <p><?php echo $emailContact->value; ?></p>
                                <p>comercial@alcazar.com</p>
                                <div class="dir-contact">
                                    <h4 class="text-pink">Dirección</h4>
                                    <p><b>Ventas: </b>Av. 19 No. 97 – 31 oficina 501</p>
                                    <p><b>Conjunto: </b>Cra. 3 No. 11 - 05, La Vega - Cundinamarca</p>
                                </div>
                            </div>
                        </div>
                        <div class="column-contact">
                            <h4 class="text-pink text-social-contact">Redes sociales</h4>
                            <div class="line social icon-footer icon-form-contact">
                                <?php $facebook = GeneralValue::model()->findByPk(3); ?>
                                <a href="<?php echo $facebook->value ?>" target="_blank">
                                    <img class="icon-foo" src="images/icon-facebook-fo.svg" alt="Facebok" class="to-svg">
                                </a>
                                <?php $youtube = GeneralValue::model()->findByPk(4); ?>
                                <a href="<?php echo $youtube->value ?>" target="_blank">
                                    <img class="icon-foo" src="images/icon-youtube-fo.svg" alt="Pinterest" class="to-svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $this->renderPartial('//layouts/_footer'); ?>