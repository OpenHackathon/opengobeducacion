<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regimen')); ?>:</b>
	<?php echo CHtml::encode($data->regimen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitud')); ?>:</b>
	<?php echo CHtml::encode($data->longitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitud')); ?>:</b>
	<?php echo CHtml::encode($data->latitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('localidad')); ?>:</b>
	<?php echo CHtml::encode($data->localidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departamento')); ?>:</b>
	<?php echo CHtml::encode($data->departamento); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jurisdiccion')); ?>:</b>
	<?php echo CHtml::encode($data->jurisdiccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('f9')); ?>:</b>
	<?php echo CHtml::encode($data->f9); ?>
	<br />

	*/ ?>

</div>