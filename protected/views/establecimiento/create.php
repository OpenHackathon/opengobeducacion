<?php
$this->breadcrumbs=array(
	'Establecimientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Establecimiento', 'url'=>array('index')),
	array('label'=>'Manage Establecimiento', 'url'=>array('admin')),
);
?>

<h1>Create Establecimiento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>