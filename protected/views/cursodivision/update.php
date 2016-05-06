<?php
$this->breadcrumbs=array(
	'Cursodivisions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cursodivision', 'url'=>array('index')),
	array('label'=>'Create Cursodivision', 'url'=>array('create')),
	array('label'=>'View Cursodivision', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cursodivision', 'url'=>array('admin')),
);
?>

<h1>Update Cursodivision <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>