<?php $this->renderPartial('//layouts/_header'); ?>
<section class="content" style="margin-top: 140px;">
		<div class="limiter-container content-project">
            <div class="items">
                <div class="item wow fadeInUp">
                    <p style="color: #E0CE10;"><strong>Brochure</strong></p>
                </div>
            </div>
        </div>
		<div class="limiter-container content-brochure">
			<div class="brochure">
				<div class="brochure-js">
					<!-- Next button -->
					<div ignore="1" class="next-button"></div>
					<!-- Previous button -->
					<div ignore="1" class="previous-button"></div>
					<?php 
					foreach ($items->images as $key => $imagen) { ?>
					
					<div>
						<img class="page" src="<?php echo Yii::app()->request->baseUrl; ?>/images/galleries/<?php echo $items->id_gallery ?>/<?php echo $imagen->name ?>" alt="1">
					</div>
						
					<?php }
				 ?>
				</div>
				<iframe src="http://docs.google.com/gview?url=<?php echo $_SERVER['SERVER_NAME'].'/files/brochure-digital.pdf' ?>&embedded=true" frameborder="0"></iframe>
			</div>
		</div>
	</section>
<?php $this->renderPartial('//layouts/_footer'); ?>