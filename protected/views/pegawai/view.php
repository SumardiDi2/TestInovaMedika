<h1>View Pegawai #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
	),
)); ?>
<?php echo CHtml::link('Back',array('pegawai/index'), array('type' => 'button', 'class' => 'btn btn-light')); ?>

