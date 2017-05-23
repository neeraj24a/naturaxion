<?php
/* @var $this ProductGalleryController */
/* @var $model ProductGallery */

$this->breadcrumbs=array(
	'Product Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductGallery', 'url'=>array('index')),
	array('label'=>'Manage ProductGallery', 'url'=>array('admin')),
);
?>

<h1>Create ProductGallery</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>