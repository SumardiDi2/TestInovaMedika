<h1>Users</h1>

<?php echo CHtml::link('Create',array('user/create'), array('type' => 'button', 'class' => 'btn btn-primary')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'role',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>