<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idcart'); ?>
		<?php echo $form->textField($model,'idcart'); ?>
		<?php echo $form->error($model,'idcart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cust_name'); ?>
		<?php echo $form->textField($model,'cust_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cust_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cust_loc'); ?>
		<?php echo $form->textField($model,'cust_loc',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cust_loc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cust_desc'); ?>
		<?php echo $form->textArea($model,'cust_desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'cust_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'createtime'); ?>
		<?php echo $form->textField($model,'createtime'); ?>
		<?php echo $form->error($model,'createtime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->