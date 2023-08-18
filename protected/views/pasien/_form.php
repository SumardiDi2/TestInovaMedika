<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasien-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idTindakan'); ?>
		<?php echo $form->dropDownList($model, 'idTindakan', CHtml::listData(
		Tindakan::model()->findAll(), 'id', 'namaTindakan')
		); ?>
		<?php echo $form->error($model,'idTindakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idObat'); ?>
		<?php echo $form->dropDownList($model, 'idObat', CHtml::listData(
		Obat::model()->findAll(), 'id', 'name')
		); ?>
		<?php echo $form->error($model,'idObat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idPegawai'); ?>
		<?php echo $form->dropDownList($model, 'idPegawai', CHtml::listData(
		Pegawai::model()->findAll(), 'id', 'name')
		); ?>
		<?php echo $form->error($model,'idPegawai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idWilayah'); ?>
		<?php echo $form->dropDownList($model, 'idWilayah', CHtml::listData(
		Wilayah::model()->findAll(), 'id', 'name')
		); ?>
		<?php echo $form->error($model,'idWilayah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenisKelamin'); ?>
		<?php echo $form->dropDownList($model, 'jenisKelamin', array('Pria' => 'Pria', 'Wanita' => 'Wanita')); ?>
		<?php echo $form->error($model,'jenisKelamin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('type' => 'button', 'class' => 'btn btn-primary')); ?>
		<?php echo CHtml::link('Back',array('pasien/index'), array('type' => 'button', 'class' => 'btn btn-light')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->