<?php
/* @var $this ItemCategoryController */
/* @var $model ItemCategory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iditem_category'); ?>
		<?php echo $form->textField($model,'iditem_category'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iditem'); ?>
		<?php echo $form->textField($model,'iditem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idcategory'); ?>
		<?php echo $form->textField($model,'idcategory'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->