<?php
$this->breadcrumbs=array(
	'Establecimientos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Establecimiento', 'url'=>array('index')),
	array('label'=>'Create Establecimiento', 'url'=>array('create')),
	array('label'=>'Update Establecimiento', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Establecimiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('zii','Are you sure you want to delete this item?'))),
	array('label'=>'Manage Establecimiento', 'url'=>array('admin')),
);
?>

<h1>View Establecimiento #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'regimen',
		'longitud',
		'latitud',
		'localidad',
		'departamento',
		'jurisdiccion',
		'f9',
	),
)); ?>

<?php
$departamentos = Departamento::model()->findAll();

foreach ($departamentos as $departamento) {
		
	$departamento->poblacionestudiantil = $departamento->poblacion * 0.3564;
	$departamento->save();

}
 ?>