<div class="row-fluid">
	<div class="span12">
		<h4>Modificar mis datos de acceso</h4>
		<?php
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
    }
?>
		<?php echo $this->renderPartial('_formclient', array('model'=>$model)); ?>
	</div>
</div>