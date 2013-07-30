<?php
/* @var $this CartItemController */
/* @var $model CartItem */

$this->breadcrumbs=array(
	'Cart Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CartItem', 'url'=>array('index')),
	array('label'=>'Manage CartItem', 'url'=>array('admin')),
);
?>

<h1>Create CartItem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>