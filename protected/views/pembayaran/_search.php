<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPasien'); ?>
		<?php echo $form->textField($model,'idPasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlahPembayaran'); ?>
		<?php echo $form->textField($model,'jumlahPembayaran',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglPembayaran'); ?>
		<?php echo $form->textField($model,'tglPembayaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->