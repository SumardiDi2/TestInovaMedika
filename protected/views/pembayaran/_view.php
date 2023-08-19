<?php
/* @var $this PembayaranController */
/* @var $data Pembayaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPasien')); ?>:</b>
	<?php echo CHtml::encode($data->idPasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlahPembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->jumlahPembayaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglPembayaran')); ?>:</b>
	<?php echo CHtml::encode($data->tglPembayaran); ?>
	<br />


</div>