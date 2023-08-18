<h1>View Obat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'production',
	),
)); ?>

<?php echo CHtml::link('Back',array('obat/index'), array('type' => 'button', 'class' => 'btn btn-light')); ?>
