<?php
/* @var $this PaymentController */
/* @var $model Payment */

$this->breadcrumbs=array(
	'Payments'=>array('index'),
	$model->idpayment=>array('view','id'=>$model->idpayment),
	'Update',
);

$this->menu=array(
	array('label'=>'List Payment', 'url'=>array('index')),
	array('label'=>'Create Payment', 'url'=>array('create')),
	array('label'=>'View Payment', 'url'=>array('view', 'id'=>$model->idpayment)),
	array('label'=>'Manage Payment', 'url'=>array('admin')),
);
?>

<h1>Update Payment <?php echo $model->idpayment; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>