<?php $form=$this->beginWidget('CActiveForm', array(
'id'=>'details-form',
'enableAjaxValidation'=>false,
'htmlOptions'=>array(
'role'=>'form',
'enctype'=>"multipart/form-data",
)
)); ?>
<div class="row">
	<?php if($form->errorSummary($model) != ""){ ?>
	<div class="col-sm-12">
		<div class="alert alert-danger">
			<?php echo $form->errorSummary($model); ?>
		</div>
	</div>
	<?php } ?>
	<div class="col-sm-12">
		<div class="widget">
			<div class="widget-header">
				<h2><strong>Entrada</strong></h2>
				<div class="additional-btn">
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				<div class="form-group">
					<?php echo $form->labelEx($model,'Descripcion'); ?>
					<?php echo $form->textField($model,'description',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Texto','required'=>true)); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="widget">
			<div class="widget-header transparent">
				<h2><strong>Imagen</strong></h2>
				<div class="additional-btn">
					<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
				</div>
			</div>
			<div class="widget-content padding">
				<div class="form-group">
					<?php echo $form->labelEx($model,'image'); ?>
					<div class="imag-before-upload" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/items-project/default.png);">
						<?php if(!$model->isNewRecord){ ?>
						<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/items-project/<?php echo $model->image; ?>)"></div>
						<?php } ?>
					</div>
					<input type="file" accept="image/*" class="btn btn-default js-show-before" name="logo" data-before=".imag-before-upload" title="<?php echo ($model->isNewRecord)?'Agregar Imagen':'Cambiar Imagen' ?>">
					<p class="help-block"><strong>Nota: </strong> Dimensiones recomendadas de 160x160. Peso maximo 100Kb.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
			<a href="<?php echo $this->createUrl('itemsproject/admin'); ?>" class="btn btn-danger">Cancelar</a>
		</div>
	</div>
</div>
<?php $this->endWidget(); ?>