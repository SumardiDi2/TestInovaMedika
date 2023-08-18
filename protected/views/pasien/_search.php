<?php
/* @var $this PasienController */
/* @var $model Pasien */
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
		<?php echo $form->label($model,'idTindakan'); ?>
		<?php echo $form->textField($model,'idTindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idObat'); ?>
		<?php echo $form->textField($model,'idObat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPegawai'); ?>
		<?php echo $form->textField($model,'idPegawai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idWilayah'); ?>
		<?php echo $form->textField($model,'idWilayah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenisKelamin'); ?>
		<?php echo $form->textField($model,'jenisKelamin',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->