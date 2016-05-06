<?php
$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumno', 'url'=>array('index')),
	array('label'=>'Create Alumno', 'url'=>array('create')),
	array('label'=>'View Alumno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Alumno', 'url'=>array('admin')),
);
?>

<h1>Update Alumno <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>