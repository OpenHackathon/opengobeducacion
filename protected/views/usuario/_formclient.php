<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>

	<?php // echo $model->password; ?>

	<?php $model->password=''; ?>	


	<div class="row">
		<?php echo $form->labelEx($model,'nya'); ?>
		<?php echo $form->textField($model,'nya',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nya'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>150,'readonly'=>true)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row" style="display:none">
		<?php echo $form->labelEx($model,'lastlogin'); ?>
		<?php echo $form->textField($model,'lastlogin'); ?>
		<?php echo $form->error($model,'lastlogin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'area_id'); ?>		
		<?php echo CHtml::dropDownList('area_id', $model->area_id ,CHtml::listData(Area::model()->findAll(),'id','descripcion'), array('disabled'=>'disabled')); ?>				
		<?php echo $form->error($model,'area_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuariotipo_id'); ?>		
		<?php echo CHtml::dropDownList('usuariotipo_id', $model->usuariotipo_id ,CHtml::listData(Usuariotipo::model()->findAll(),'id','descripcion'),array('disabled'=>'disabled')); ?>				
		<?php echo $form->error($model,'usuariotipo_id'); ?>
	</div>

	<h4>Modificar la contraseña</h4>

	<div class="row">
		<label for="password2">Ingrese la contraseña</label>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<label for="password2">Ingrese nuevamente la contraseña</label>
		<input type="password" name="password2" id="password2">		
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->