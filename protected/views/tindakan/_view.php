<?php
/* @var $this TindakanController */
/* @var $data Tindakan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaTindakan')); ?>:</b>
	<?php echo CHtml::encode($data->namaTindakan); ?>
	<br />


</div>