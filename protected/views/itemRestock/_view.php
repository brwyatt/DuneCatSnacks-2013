<?php
/* @var $this ItemRestockController */
/* @var $data ItemRestock */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iditem_restock')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iditem_restock), array('view', 'id'=>$data->iditem_restock)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iditem')); ?>:</b>
	<?php echo CHtml::encode($data->iditem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />


</div>