
<h1>View Pembayaran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'idPasien0.name',
			'label'=>'Nama Pasien',
		),
		'jumlahPembayaran',
		'tglPembayaran',
	),
)); ?>

<?php echo CHtml::link('Back',array('pembayaran/index'), array('type' => 'button', 'class' => 'btn btn-light')); ?>

