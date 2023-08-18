<h1>View Wilayah #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>

<?php echo CHtml::link('Back',array('wilayah/index'), array('type' => 'button', 'class' => 'btn btn-light')); ?>

