<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cursodivision-form',
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
		<?php echo $form->labelEx($model,'cueanexo'); ?>
		<?php echo $form->textField($model,'cueanexo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cueanexo'); ?>
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
		<?php echo $form->labelEx($model,'nivelensenanza'); ?>
		<?php echo $form->textField($model,'nivelensenanza',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nivelensenanza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciclo'); ?>
		<?php echo $form->textField($model,'ciclo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ciclo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orientacion'); ?>
		<?php echo $form->textField($model,'orientacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'orientacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modalidad'); ?>
		<?php echo $form->textField($model,'modalidad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'modalidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->