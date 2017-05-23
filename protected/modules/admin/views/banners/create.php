<section class="content-header">
    <h1>
        Add
        <small>Banner</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url() . '/admin/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url() . '/admin/banners'; ?>"><i class="fa fa-dashboard"></i> Banners</a></li>
        <li class="active">Add</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Banner</h3>
                </div>
                <?php $this->renderPartial('_form', array('model' => $model)); ?>
            </div>
        </div>
    </div>
</section>
<?php
/* @var $this BannersController */
/* @var $model Banners */

$this->breadcrumbs=array(
	'Banners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Banners', 'url'=>array('index')),
	array('label'=>'Manage Banners', 'url'=>array('admin')),
);
?>

<h1>Create Banners</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>