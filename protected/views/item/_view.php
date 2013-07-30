<?php
/* @var $this ItemController */
/* @var $data Item */
?>

<div class="view">

        <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
        <?php echo CHtml::encode($data->name); ?>
        <br />

        <img src="/assets/itemImages/<?php echo CHtml::encode($data->image); ?>" />
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
        <?php echo CHtml::encode($data->description); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
        <?php echo CHtml::encode($data->price); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
        <?php echo CHtml::encode($data->quantity); ?>
        <br />


</div>
