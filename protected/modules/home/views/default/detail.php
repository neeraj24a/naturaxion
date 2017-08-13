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
									<i class="fa fa-folder"></i> All
								</a>
								<?php foreach($categories as $cat): ?>
								<a href="#" class="list-group-item">
									<i class="fa fa-folder"></i> <?php echo $cat->name; ?>
								</a>
								<?php endforeach; ?>
							</div>	
                        </div>
                        <div class="col-md-9">
                            <h1>PRODUCTS</h1>
                            <div class="bread_cum"> <a href="<?php echo base_url(); ?>/products">Products</a> > <a href="#">Healthcare</a> > <a href="#">Nutraceutical</a> </div>
                            <div class="product_details">
                                <div class="product_detailsL">
                                    <div class="product_detailsIN zoomin frame">
                                        <div><img src="<?php echo base_url(); ?>/images/products/<?php echo (!empty($product->product_main_image[0]->image)) ? $product->product_main_image[0]->image : ''; ?>" alt="" title=""></div>
                                    </div> 
                                    <?php
                                    if (!empty($product->product_gallery_image)) {
                                        ?>

                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <?php  
                                                    foreach($product->product_gallery_image as $gallery_image)
                                                    {    
                                                    ?>
                                                    <div class="box_pro2">
                                                        <a href="#"><img src="<?php echo base_url().'/images/products/'.$gallery_image->image;  ?>" alt=""> </a> 
                                                    </div>
                                                    <?php 
                                                    }
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                            <!-- Left and right controls -->
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                                <div class="product_detailsR">
                                    <h3>Item#:  <?php echo $product->sku; ?></h3>
                                    <p>1 - <?php echo $product->name; ?></p>
                                    <p><img src="<?php echo $baseUrl; ?>/img/share.png" alt=""></p>
                                    <span> <strong>Plant Size:</strong> 1-4 INCH POT </span>
                                    <p><strong>Quantity:</strong>
                                        <input name="" type="text">
                                        <span class="text">(Minimum: 1)</span></p>
                                    <p><strong>Shipping:</strong> <span>Lorem Ipsum is simply dummy text</span></p>
                                    <p class="total">TOTAL: $<?php echo $product->price; ?></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="des_container">
                                <div class="tab">
                                    <button class="tablinks" onClick="openCity(event, 'London')">Description</button>
                                    <button class="tablinks" onClick="openCity(event, 'Tokyo')">Additional Information</button>
                                    <button class="tablinks" onClick="openCity(event, 'Paris')">Reviews (0)</button>
                                </div>
                                <div id="London" class="tabcontent">
                                    <p>Ayurveda is a holistic medical system. Ayurveda is a Sanskrit word that literally means as the knowledge of life (AYU – life, VEDA – knowledge or science). It is based on ancient Indian texts that utilize natural treatments, herbal medicines, lifestyle and dietary practices to promote healing of body, mind and spirit. The benefits of Ayurveda have been proven over centuries and practiced in daily life to sustain health. </p>
                                </div>
                                <div id="Tokyo" class="tabcontent">
                                    <p>Ayurveda, most commonly defined as the practice of ancient Hindu or Indian medicine, originates with the Vedas, the earliest Indian literature, dating from ca. 1500 B.C. Originally transmitted orally, Ayurveda was codified into major treatise of Charak, Sushruta and Vagbhatta samhita (medical transcripts). These texts continue to be the most important classical reference even today. Ayurveda consist of eight branches; general medicine (kayachikitsa), surgery (Shalya), disease of ear, nose and throat (Shalakya), pediatrics (Kaumarbhrutya), toxicology (Agadatantra), psychiatry (Manas roga), Rejuvenation (Rasayana) and sexual vitality (Vajikaran). Over 80 % of the population opts for alternative therapy as curative and preventive healing. Ayurveda has stood the test of times and continues to be complete healing system to offer ancient understanding and wisdom to the modern world. </p>
                                </div>
                                <div id="Paris" class="tabcontent">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact_field">
                                                <label class="col-md-3">Your Name: *</label>
                                                <input name="" type="text" placeholder="">
                                            </div>
                                            <div class="contact_field">
                                                <label class="col-md-3">Your Name: *</label>
                                                <input name="" type="text" placeholder="" class="contact_bg"></div>
                                            <div class="contact_field">
                                                <label class="col-md-3">Your Review *</label>
                                                <textarea name="" cols="" rows=""></textarea>
                                            </div>
                                            <div class="contact_field">
                                                <label class="col-md-3">Your Rating:</label>
                                                <a href="#"><img src="img/Star.png" alt=""></a>  <a href="#"><img src="img/Star.png" alt=""></a>  <a href="#"><img src="img/Star.png" alt=""></a>  <a href="#"><img src="img/Star.png" alt=""></a>  <a href="#"><img src="img/Star.png" alt=""></a>
                                            </div>
                                            <div class="contact_field">
                                                <label class="col-md-3"></label>
                                                <input name="" type="submit" value="SUBMIT">
                                                <input name="" type="button" value="RESET" class="btnbg">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="product_box">
                                <h1>RELATED PRODUCTS</h1>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="box_pro">
                                            <div class="price_tag">&#8377;30</div>
                                            <div><img src="img/img6.jpg" alt=""></div>
                                            <h1>Lorem ipsum dolor sit</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec lobortis ex, vel luctus ligula. Vivamus</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="box_pro">
                                            <div class="price_tag">&#8377;30</div>
                                            <div><img src="img/img7.jpg" alt=""></div>
                                            <h1>Lorem ipsum dolor sit</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec lobortis ex, vel luctus ligula. Vivamus</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="box_pro">
                                            <div class="price_tag">&#8377;30</div>
                                            <div><img src="img/img8.jpg" alt=""></div>
                                            <h1>Lorem ipsum dolor sit</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec lobortis ex, vel luctus ligula. Vivamus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // PRODUCTS AREA END // -->
<div class="clearfix"></div>