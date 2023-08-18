<h1>Pegawai</h1>

<?php echo CHtml::link('Create',array('pegawai/create'), array('type' => 'button', 'class' => 'btn btn-primary')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pegawai-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'address',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
