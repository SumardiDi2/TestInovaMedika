<h1>View Tindakan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'namaTindakan',
	),
)); ?>
<?php echo CHtml::link('Back',array('tindakan/index'), array('type' => 'button', 'class' => 'btn btn-light')); ?>
