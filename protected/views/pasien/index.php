<h1>Pasien</h1>
<?php echo CHtml::link('Create',array('pasien/create'), array('type' => 'button', 'class' => 'btn btn-primary')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pasien-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'idTindakan0.namaTindakan',
			'header'=>'Tindakan',
		),
		array(
			'name'=>'idObat0.name',
			'header'=>'Obat',
		),
		array(
			'name'=>'idPegawai0.name',
			'header'=>'Pegawai',
		),
		array(
			'name'=>'idWilayah0.name',
			'header'=>'Wilayah',
		),
		'name',
		'address',
		'jenisKelamin',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
