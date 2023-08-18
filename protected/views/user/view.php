<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'role',
	),
)); ?>

<?php echo CHtml::link('Back',array('user/index'), array('type' => 'button', 'class' => 'btn btn-light')); ?>

