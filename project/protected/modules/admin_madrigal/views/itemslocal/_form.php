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
			<div class="col-sm-12">
				<div class="widget">
					<div class="widget-content padding">
						<div class="form-group">
							<?php echo $form->labelEx($model,'Tipo'); ?>
							<?php echo $form->textField($model,'type',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Texto','required'=>true)); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="widget-content padding">
				<h4><strong>Descripción</strong></h4>
				<div class="form-group">
					<?php echo $form->textArea($model,'description',array('class'=>'js-ckeditor')); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="form-group">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
			<a href="<?php echo $this->createUrl('itemslocal/admin'); ?>" class="btn btn-danger">Cancelar</a>
		</div>
	</div>
</div>
<?php $this->endWidget(); ?>