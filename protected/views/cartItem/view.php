<?php
/* @var $this CartItemController */
/* @var $model CartItem */

$this->breadcrumbs=array(
	'Cart Items'=>array('index'),
	$model->idcart_item,
);

$this->menu=array(
	array('label'=>'List CartItem', 'url'=>array('index')),
	array('label'=>'Create CartItem', 'url'=>array('create')),
	array('label'=>'Update CartItem', 'url'=>array('update', 'id'=>$model->idcart_item)),
	array('label'=>'Delete CartItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcart_item),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CartItem', 'url'=>array('admin')),
);
?>

<h1>View CartItem #<?php echo $model->idcart_item; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcart_item',
		'idcart',
		'iditem',
		'quantity',
	),
)); ?>
