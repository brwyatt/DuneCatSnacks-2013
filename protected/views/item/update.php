<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->name=>array('view','id'=>$model->iditem),
	'Update',
);

$this->menu=array(
	array('label'=>'List Item', 'url'=>array('index')),
	array('label'=>'Create Item', 'url'=>array('create')),
	array('label'=>'View Item', 'url'=>array('view', 'id'=>$model->iditem)),
	array('label'=>'Manage Item', 'url'=>array('admin')),
);
?>

<h1>Update Item <?php echo $model->iditem; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>