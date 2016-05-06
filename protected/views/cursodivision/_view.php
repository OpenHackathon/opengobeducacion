<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cue')); ?>:</b>
	<?php echo CHtml::encode($data->cue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anexo')); ?>:</b>
	<?php echo CHtml::encode($data->anexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cueanexo')); ?>:</b>
	<?php echo CHtml::encode($data->cueanexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('curso')); ?>:</b>
	<?php echo CHtml::encode($data->curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('division')); ?>:</b>
	<?php echo CHtml::encode($data->division); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nivelensenanza')); ?>:</b>
	<?php echo CHtml::encode($data->nivelensenanza); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ciclo')); ?>:</b>
	<?php echo CHtml::encode($data->ciclo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orientacion')); ?>:</b>
	<?php echo CHtml::encode($data->orientacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modalidad')); ?>:</b>
	<?php echo CHtml::encode($data->modalidad); ?>
	<br />

	*/ ?>

</div>