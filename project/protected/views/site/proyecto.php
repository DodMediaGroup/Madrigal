<?php $this->renderPartial('//layouts/_header'); ?>
<section class="content" style="margin-top: 100px;">
	<div class="limiter-container content-project">
		<div class="items">
			<div class="item  wow fadeInUp">
				<p style="color: #575D29;">Edificio<strong>Multifamiliar y Comercial</strong></p>
			</div>
		</div>
	</div>
	<div class="options-proy">
		<div class="column-opt-1">
			<ul>
				<?php foreach ($details as $key => $detail) {?>
				<?php if($detail->id%2==1){?>

				<li class="opt-proy wow fadeInLeft"><span><img src="images/item.png" alt="Item"></span><?php
				 echo "$detail->description" ?></li>
				<?php }
				?>
			<?php	
			} ?>
			</ul>
		</div>
		<div class="column-opt-1">
			<ul>
				<?php foreach ($details as $key => $detail) {?>
				<?php if($detail->id%2==0){?>

				<li class="opt-proy wow fadeInLeft"><span><img src="images/item.png" alt="Item"></span><?php
				 echo "$detail->description" ?></li>
				<?php }
				?>
			<?php	
			} ?>
			</ul>
		</div>
	</div>
	<div class="back-image-green">
		<div class="span-6">
			<div class="cuadro  ">
				<div class="text-opt-proy">
					Apartamentos
				</div>
				<?php $apartamentos = GeneralValue::model()->findByPk(5); ?>
				<p><?php echo $apartamentos->value; ?></p>
			</div>
		</div>
		<div class="span-6 column-rigth-proyect">
			<div class="cuadro  ">
				<div class="text-opt-proy">
					Locales
				</div>
				<?php $locales = GeneralValue::model()->findByPk(6); ?>
				<p><?php echo $locales->value; ?></p>
			</div>
		</div>
		<?php $detalle = GeneralValue::model()->findByPk(7); ?>
		<h4 class="text-bottom-line  "><?php echo $detalle->value; ?></h4>
	</div>
	<div class="limiter-container content-project">
		<div class="line-box">
			<div class="line column1">
				<div class="image-building"> </div>
			</div>
			<div class="line column">
				<ul class="items">
				<?php 
				foreach ($items as $key => $item) { ?>
					<li class="item wow fadeIn">
						<span><img src="images/items-project/<?php echo $item->image; ?>" alt="Edificio Inteligente"></span> <?php echo "$item->description" ?>
					</li>
				<?php
				}
				 ?>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php $this->renderPartial('//layouts/_footer'); ?>