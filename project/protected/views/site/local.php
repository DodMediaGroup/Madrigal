<?php $this->renderPartial('//layouts/_header'); ?>
<section class="content" style="margin-top: 130px;">
	<div class="limiter-container content-project">
		<div class="items">
			<div class="item wow fadeInUp ">
				<p style="color: #9CAB20;"><strong>Locales</strong></p>
			</div>
		</div>
	</div>
	<div class="options-local">
		<div class="column-local  ">
			<p>Área libre con baño privado (en obra gris) <br>
			<b>8 Áreas</b> disponibles</p>
			<ul>
			<?php 
			foreach ($items as $key => $item) {?>
				<?php if($item->id%2==1){ ?>

				<li class="opt-local  "><span><img class="item-space" src="images/item.png" alt="Item"></span> <h4><?php echo $item->type; ?>:  </h4><?php echo "$item->description" ?></li>
				<?php }
				?>
			<?php
			}
			 ?>
			</ul>
		</div>
		<div class="column-local column-local-rigth">
			<ul>
				<?php 
			foreach ($items as $key => $item) {?>
				<?php if($item->id%2==0){ ?>

				<li class="opt-local  "><span><img class="item-space" src="images/item.png" alt="Item"></span> <h4><?php echo $item->type; ?>:  </h4><?php echo "$item->description" ?></li>
				<?php }
				?>
			<?php
			}
			 ?>
			</ul>
		</div>
	</div>
</section>
<?php $this->renderPartial('//layouts/_footer'); ?>