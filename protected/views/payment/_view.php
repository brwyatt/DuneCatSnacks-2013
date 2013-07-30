<?php
/* @var $this PaymentController */
/* @var $data Payment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpayment')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpayment), array('view', 'id'=>$data->idpayment)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idorder')); ?>:</b>
	<?php echo CHtml::encode($data->idorder); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />


</div>