<?php
/* @var $this CartController */
/* @var $model Cart */

$this->breadcrumbs=array(
	'Carts'=>array('index'),
	$model->idcart,
);

$this->menu=array(
	array('label'=>'List Cart', 'url'=>array('index')),
	array('label'=>'Create Cart', 'url'=>array('create')),
	array('label'=>'Update Cart', 'url'=>array('update', 'id'=>$model->idcart)),
	array('label'=>'Delete Cart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcart),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cart', 'url'=>array('admin')),
);
?>

<h1>View Cart #<?php echo $model->idcart; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcart',
		'cookie',
	),
)); ?>
