<?php
$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Alumno', 'url'=>array('index')),
	array('label'=>'Create Alumno', 'url'=>array('create')),
	array('label'=>'Update Alumno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Alumno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Alumno', 'url'=>array('admin')),
);
?>

<h1>View Alumno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cue',
		'anexo',
		'establecimiento_id',
		'cursodivision_id',
		'curso',
		'division',
		'sexo',
		'fechanacimiento',
		'id',
	),
)); ?>
