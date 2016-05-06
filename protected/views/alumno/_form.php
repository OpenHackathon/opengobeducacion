<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cue'); ?>
		<?php echo $form->textField($model,'cue',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anexo'); ?>
		<?php echo $form->textField($model,'anexo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'anexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'establecimiento_id'); ?>
		<?php echo $form->textField($model,'establecimiento_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'establecimiento_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cursodivision_id'); ?>
		<?php echo $form->textField($model,'cursodivision_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cursodivision_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'curso'); ?>
		<?php echo $form->textField($model,'curso',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'curso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'division'); ?>
		<?php echo $form->textField($model,'division',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'division'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechanacimiento'); ?>
		<?php echo $form->textField($model,'fechanacimiento',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fechanacimiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->