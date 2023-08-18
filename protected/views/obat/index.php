<h1>Obat</h1>

<?php echo CHtml::link('Create',array('obat/create'), array('type' => 'button', 'class' => 'btn btn-primary')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'obat-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'production',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
