<?php
/* @var $this RelatedProductsController */
/* @var $model RelatedProducts */

$this->breadcrumbs=array(
	'Related Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RelatedProducts', 'url'=>array('index')),
	array('label'=>'Manage RelatedProducts', 'url'=>array('admin')),
);
?>

<h1>Create RelatedProducts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>