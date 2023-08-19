<?php
/* @var $this PasienController */
/* @var $data Pasien */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTindakan')); ?>:</b>
	<?php echo CHtml::encode($data->idTindakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idObat')); ?>:</b>
	<?php echo CHtml::encode($data->idObat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPegawai')); ?>:</b>
	<?php echo CHtml::encode($data->idPegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idWilayah')); ?>:</b>
	<?php echo CHtml::encode($data->idWilayah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jenisKelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenisKelamin); ?>
	<br />

	*/ ?>

</div>