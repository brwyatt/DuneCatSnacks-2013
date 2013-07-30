<?php
/* @var $this CartItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cart Items',
);

$this->menu=array(
	array('label'=>'Create CartItem', 'url'=>array('create')),
	array('label'=>'Manage CartItem', 'url'=>array('admin')),
);
?>

<h1>Cart Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
