<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pembayaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idPasien'); ?>
		<?php echo $form->dropDownList($model, 'idPasien', CHtml::listData(
		Pasien::model()->findAll(), 'id', 'name')
		); ?>
		<?php echo $form->error($model,'idPasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlahPembayaran'); ?>
		<?php echo $form->textField($model,'jumlahPembayaran',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'jumlahPembayaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglPembayaran'); ?>
		<?php echo $form->textField($model,'tglPembayaran'); ?>
		<?php echo $form->error($model,'tglPembayaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('type' => 'button', 'class' => 'btn btn-primary')); ?>
		<?php echo CHtml::link('Back',array('pembayaran/index'), array('type' => 'button', 'class' => 'btn btn-light')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->