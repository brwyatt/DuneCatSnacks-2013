<?php
/* @var $this CartController */
/* @var $data Cart */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcart')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcart), array('view', 'id'=>$data->idcart)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cookie')); ?>:</b>
	<?php echo CHtml::encode($data->cookie); ?>
	<br />


</div>