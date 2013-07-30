<?php
/* @var $this CartItemController */
/* @var $data CartItem */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcart_item')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcart_item), array('view', 'id'=>$data->idcart_item)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcart')); ?>:</b>
	<?php echo CHtml::encode($data->idcart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iditem')); ?>:</b>
	<?php echo CHtml::encode($data->iditem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />


</div>