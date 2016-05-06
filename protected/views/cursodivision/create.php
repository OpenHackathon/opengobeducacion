<?php
$this->breadcrumbs=array(
	'Cursodivisions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cursodivision', 'url'=>array('index')),
	array('label'=>'Manage Cursodivision', 'url'=>array('admin')),
);
?>

<h1>Create Cursodivision</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>