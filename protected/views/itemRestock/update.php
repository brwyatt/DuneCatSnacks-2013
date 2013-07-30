<?php
/* @var $this ItemRestockController */
/* @var $model ItemRestock */

$this->breadcrumbs=array(
	'Item Restocks'=>array('index'),
	$model->iditem_restock=>array('view','id'=>$model->iditem_restock),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemRestock', 'url'=>array('index')),
	array('label'=>'Create ItemRestock', 'url'=>array('create')),
	array('label'=>'View ItemRestock', 'url'=>array('view', 'id'=>$model->iditem_restock)),
	array('label'=>'Manage ItemRestock', 'url'=>array('admin')),
);
?>

<h1>Update ItemRestock <?php echo $model->iditem_restock; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>