<h1>Tindakan</h1>

<?php echo CHtml::link('Create',array('tindakan/create'), array('type' => 'button', 'class' => 'btn btn-primary')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'namaTindakan',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
