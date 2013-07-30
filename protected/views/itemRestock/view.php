<?php
/* @var $this ItemRestockController */
/* @var $model ItemRestock */

$this->breadcrumbs=array(
	'Item Restocks'=>array('index'),
	$model->iditem_restock,
);

$this->menu=array(
	array('label'=>'List ItemRestock', 'url'=>array('index')),
	array('label'=>'Create ItemRestock', 'url'=>array('create')),
	array('label'=>'Update ItemRestock', 'url'=>array('update', 'id'=>$model->iditem_restock)),
	array('label'=>'Delete ItemRestock', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iditem_restock),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemRestock', 'url'=>array('admin')),
);
?>

<h1>View ItemRestock #<?php echo $model->iditem_restock; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iditem_restock',
		'iditem',
		'quantity',
		'cost',
	),
)); ?>
