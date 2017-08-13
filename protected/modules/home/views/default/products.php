<?php
$baseUrl = Yii::app()->theme->baseUrl;
?> 
<div class="clearfix"></div>
<!-- // BANNER AREA START // -->
<div class="aboutus_area">
    <div class="container">
        <div class="row">
            <div class="about_inner">
                <div class="col-md-12">
                    <h1 style="background:none;">OUR PRODUCTS</h1>
                    <?php
                    //pre($product->product_gallery_image,true);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // BANNER AREA END // -->
<div class="clearfix"></div>
<!-- // PRODUCTS CONT AREA START // -->
<div class="product_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product_inner">          
                    <div class="row">
                        <div class="col-md-3">
							<div class="list-group categories">
								<span href="#" class="list-group-item active">
									Browse by Category
								</span>
								<a href="<?php echo base_url(); ?>/products" class="list-group-item">
									<i class="fa fa-folder-open-o"></i> All
								</a>
								<?php foreach($categories as $cat): ?>
								<a href="#" class="list-group-item">
									<i class="fa fa-folder"></i> <?php echo $cat->name; ?>
								</a>
								<?php endforeach; ?>
							</div>			
                        </div>
                        <div class="col-md-9">
                           <?php $this->widget('zii.widgets.CListView', array(
								'dataProvider'=>$dataProvider,
								'itemView'=>'_product',
							)); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // PRODUCTS AREA END // -->
<div class="clearfix"></div>