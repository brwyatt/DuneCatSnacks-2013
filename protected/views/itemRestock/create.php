<?php
/* @var $this ItemRestockController */
/* @var $model ItemRestock */

$this->breadcrumbs=array(
	'Item Restocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ItemRestock', 'url'=>array('index')),
	array('label'=>'Manage ItemRestock', 'url'=>array('admin')),
);
?>

<h1>Create ItemRestock</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>