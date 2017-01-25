<?php $this->renderPartial('//layouts/_header'); ?>
<div style="position: absolute;width: 100%; height: 100%; background: url(images/fondo-error.png) center no-repeat;">
	<div style="position: absolute;background-color: #9cab20;opacity: .8;height: 100%;width: 100%;">
		
		<div style="position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%);">
			
			<?php
			/* @var $this SiteController */
			/* @var $error array */
			$this->pageTitle=Yii::app()->name . ' - Error';
			$this->breadcrumbs=array(
				'Error',
			);
			?>
			<h1 style="position: absolute;font-size: 50px;color: #ffffff;">error <?php echo $code; ?></h1>
			<img style="width: 100%;margin-top: 15%;" src="images/logo-error.png" alt="">
		</div>
	</div>
	<div style="top: 70%;position: relative;background: #fff;width: 60%;margin-left: 20%;padding: 5px 50px;">
		<section class="line contact-area">
            <header>
                <div class="limiter-container" style="display: flex; justify-content: center;">
                    <img style="margin-top: 10px;" src="images/icon-contact-fo.svg" alt="Contacto">
                    <h1 style="text-align: center;" class="text-pink">
                    CONTACTO
                    </h1>
                </div>
            </header>
            <div class="info-contact" style="line-height: .5em;">
                <div class="limiter-container">
                    <h3 class="text-pink">Teléfonos</h3>
                    <div class="line-box">
                        <div class="line">
                            <strong>Celular:</strong>
                            <?php $celular_uno = GeneralValue::model()->findByPk(8); ?>
                            <p><?php echo $celular_uno->value; ?></p>
                            <?php $celular_dos = GeneralValue::model()->findByPk(9); ?>
                            <p><?php echo $celular_dos->value; ?></p>
                            <strong>Fijo:</strong>
                            <?php $phoneContact = GeneralValue::model()->findByPk(2); ?>
                            <p><?php echo $phoneContact->value ?></p>
                        </div>
                        <div class="line">
                    <h3 class="text-pink" style="margin-bottom: 0px;">Correo electrónico:</h3>
                    <?php $emailContact = GeneralValue::model()->findByPk(1); ?>
                    <p><?php echo $emailContact->value; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line social icon-footer" style="margin-top: -15%;">
                <a href="#" target="_blank">
                    <img class="icon-foo" src="images/icon-facebook-fo.svg" alt="Facebok" class="to-svg">
                </a>
                <a href="#" target="_blank">
                    <img class="icon-foo" src="images/icon-youtube-fo.svg" alt="Pinterest" class="to-svg">
                </a>
            </div>
            <div>
            	<p style=" text-align: center; padding: 20px 0 0 0; font-size: 16px; color: #444; "><b>La Vega - Cundinamarca, Colombia Cra 3 No 11 - 05</b></p>
            </div>
        </section>
	</div>
</div>