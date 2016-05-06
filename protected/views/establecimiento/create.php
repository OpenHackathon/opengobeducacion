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

<?php //echo $this->renderPartial('_form', array('model'=>$model)); ?>

<?php 

$alumnos = Alumno::model()->findAll();

$i=0;
foreach ($alumnos as $alu) {
	

	//$arra = explode('/',$alu->fechanacimiento);

	//$date = $arra[2].'-'.$arra[0].'-'.$arra[1];

	//$alu->fechanac = $date;

	//$alu->curso = str_replace("?", '', $alu->curso);

	//$arra = explode('-',$alu->fechanac);

	$i++;

	$alu->anocursoideal = $alu->curso;

	if($i == 10){
		$alu->anocursoideal = 0;
		$i=0;
	}else{
		$alu->anocursoideal = 1;	
	}

	

	$alu->save();

}
?>