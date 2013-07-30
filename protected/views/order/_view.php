<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorder')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idorder), array('view', 'id'=>$data->idorder)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcart')); ?>:</b>
	<?php echo CHtml::encode($data->idcart); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cust_name')); ?>:</b>
	<?php echo CHtml::encode($data->cust_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cust_loc')); ?>:</b>
	<?php echo CHtml::encode($data->cust_loc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cust_desc')); ?>:</b>
	<?php echo CHtml::encode($data->cust_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createtime')); ?>:</b>
	<?php echo CHtml::encode($data->createtime); ?>
	<br />


</div>