<?php
/* @var $this ItemCategoryController */
/* @var $data ItemCategory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iditem_category')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iditem_category), array('view', 'id'=>$data->iditem_category)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iditem')); ?>:</b>
	<?php echo CHtml::encode($data->iditem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategory')); ?>:</b>
	<?php echo CHtml::encode($data->idcategory); ?>
	<br />


</div>