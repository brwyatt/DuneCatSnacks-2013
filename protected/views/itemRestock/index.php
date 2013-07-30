<?php
/* @var $this ItemRestockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Item Restocks',
);

$this->menu=array(
	array('label'=>'Create ItemRestock', 'url'=>array('create')),
	array('label'=>'Manage ItemRestock', 'url'=>array('admin')),
);
?>

<h1>Item Restocks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
