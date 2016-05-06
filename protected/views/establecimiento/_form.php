<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'establecimiento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regimen'); ?>
		<?php echo $form->textField($model,'regimen',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'regimen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitud'); ?>
		<?php echo $form->textField($model,'longitud',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'longitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitud'); ?>
		<?php echo $form->textField($model,'latitud',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'latitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'localidad'); ?>
		<?php echo $form->textField($model,'localidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'localidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departamento'); ?>
		<?php echo $form->textField($model,'departamento',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jurisdiccion'); ?>
		<?php echo $form->textField($model,'jurisdiccion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jurisdiccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'f9'); ?>
		<?php echo $form->textField($model,'f9',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'f9'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->