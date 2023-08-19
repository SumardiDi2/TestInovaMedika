<h1>View Pasien #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'idTindakan0.namaTindakan',
			'label'=>'Tindakan',
		),
		array(
			'name'=>'idObat0.name',
			'label'=>'Obat',
		),
		array(
			'name'=>'idPegawai0.name',
			'label'=>'Pegawai',
		),
		array(
			'name'=>'idWilayah0.name',
			'label'=>'Wilayah',
		),
		'name',
		'address',
		'jenisKelamin',
	),
)); ?>

<?php echo CHtml::link('Back',array('pasien/index'), array('type' => 'button', 'class' => 'btn btn-light')); ?>

