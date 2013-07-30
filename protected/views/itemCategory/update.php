<?php
/* @var $this ItemCategoryController */
/* @var $model ItemCategory */

$this->breadcrumbs=array(
	'Item Categories'=>array('index'),
	$model->iditem_category=>array('view','id'=>$model->iditem_category),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemCategory', 'url'=>array('index')),
	array('label'=>'Create ItemCategory', 'url'=>array('create')),
	array('label'=>'View ItemCategory', 'url'=>array('view', 'id'=>$model->iditem_category)),
	array('label'=>'Manage ItemCategory', 'url'=>array('admin')),
);
?>

<h1>Update ItemCategory <?php echo $model->iditem_category; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>