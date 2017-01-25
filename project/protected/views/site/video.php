<?php $this->renderPartial('//layouts/_header'); ?>
<section class="content" style="margin-top: 130px;">
	<div class="limiter-container content-project">
		<div class="items">
			<div class="item wow fadeInUp">
				<p style="color: #CDCE10;"><strong>Video</strong></p>
			</div>
		</div>
	</div>
	<div class="limiter-container content-video">
		<div class="video back-image-brow">
		<?php $youtube_video = GeneralValue::model()->findByPk(10); ?>
			<iframe class="js-resizing image" data-resizing="9/16" src="https://www.youtube.com/embed/<?php echo $youtube_video->value; ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>
<?php $this->renderPartial('//layouts/_footer'); ?>