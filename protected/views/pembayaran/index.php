<h1>Pembayaran</h1>
<?php echo CHtml::link('Create',array('pembayaran/create'), array('type' => 'button', 'class' => 'btn btn-primary')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pembayaran-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'idPasien0.name',
			'header'=>'Nama Pasien',
		),
		'jumlahPembayaran',
		'tglPembayaran',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
