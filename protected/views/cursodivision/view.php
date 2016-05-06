<?php
$this->breadcrumbs=array(
	'Cursodivisions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cursodivision', 'url'=>array('index')),
	array('label'=>'Create Cursodivision', 'url'=>array('create')),
	array('label'=>'Update Cursodivision', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cursodivision', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Cursodivision', 'url'=>array('admin')),
);
?>

<h1>View Cursodivision #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cue',
		'anexo',
		'cueanexo',
		'curso',
		'division',
		'nivelensenanza',
		'ciclo',
		'orientacion',
		'modalidad',
	),
)); ?>
