<?php $this->renderPartial('//layouts/_header'); ?>
<section class="slider">
	<div id="owl-demo" class="owl-carousel">
		<?php foreach ($slides as $key => $slide) { ?>
		<div class="item-slide"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slide/<?php echo $slide->image; ?>" alt="Slide">
			<div class="<?php echo $slide->color->clase ?> principal-line_slide">				
				<div class="text-dos_slide"><?php echo "$slide->text"; ?></div>
				<p class="text-tres_slide"><span><b>+   </b></span><a href="">Ver más</a></p>
			</div>
		</div>
		<?php
		} ?>
	</div>
</section>
<section class="contact-line">
	<div class="limiter-container">
		<div class="line-box">
			<div class="line text">
				<div class="line-box wow fadeInUp">
					<span class="line"><img src="images/icon-message.svg" alt="Contacto" class="to-svg"></span>
					<p class="line">Déjenos sus datos y un agente de ventas de nuestro proyecto se comunicará con usted para darle toda la información.</p>
				</div>
			</div>
			<div class="line form">
				<form action="api/send-message" id="contact" class="line-box wow fadeInUp">
					<div class="line inputs">
						<input type="text" name="name" placeholder="Nombre" class="input" required>
						<input type="email" name="email" placeholder="Correo" class="input" required>
						<input type="phone" name="phone" placeholder="Teléfono" class="input" required>
					</div>
					<div class="line message">
						<textarea name="message" placeholder="Mensaje" required></textarea>
					</div>
					<button type="submit">
					<span><img src="images/message.svg" alt="Enviar" class="to-svg"></span> Enviar
					</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php $this->renderPartial('//layouts/_footer'); ?>