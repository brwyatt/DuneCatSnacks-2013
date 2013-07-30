<?php
/* @var $this CartItemController */
/* @var $model CartItem */

$this->breadcrumbs=array(
	'Cart Items'=>array('index'),
	$model->idcart_item=>array('view','id'=>$model->idcart_item),
	'Update',
);

$this->menu=array(
	array('label'=>'List CartItem', 'url'=>array('index')),
	array('label'=>'Create CartItem', 'url'=>array('create')),
	array('label'=>'View CartItem', 'url'=>array('view', 'id'=>$model->idcart_item)),
	array('label'=>'Manage CartItem', 'url'=>array('admin')),
);
?>

<h1>Update CartItem <?php echo $model->idcart_item; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>