<?php
/* @var $this CartItemController */
/* @var $model CartItem */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcart_item'); ?>
		<?php echo $form->textField($model,'idcart_item'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcart'); ?>
		<?php echo $form->textField($model,'idcart'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iditem'); ?>
		<?php echo $form->textField($model,'iditem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->