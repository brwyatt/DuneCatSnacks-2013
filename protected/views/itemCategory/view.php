<?php
/* @var $this ItemCategoryController */
/* @var $model ItemCategory */

$this->breadcrumbs=array(
	'Item Categories'=>array('index'),
	$model->iditem_category,
);

$this->menu=array(
	array('label'=>'List ItemCategory', 'url'=>array('index')),
	array('label'=>'Create ItemCategory', 'url'=>array('create')),
	array('label'=>'Update ItemCategory', 'url'=>array('update', 'id'=>$model->iditem_category)),
	array('label'=>'Delete ItemCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iditem_category),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemCategory', 'url'=>array('admin')),
);
?>

<h1>View ItemCategory #<?php echo $model->iditem_category; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iditem_category',
		'iditem',
		'idcategory',
	),
)); ?>
