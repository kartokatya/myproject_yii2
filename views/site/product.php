<?php
/**
 * Created by PhpStorm.
 * User: Mi
 * Date: 26/05/2018
 * Time: 14:18
 * @var $product app\models\Product
 */
use yii\helpers\Url;
?>

<div class="single">

    <div class="container">
        <div class="col-md-9">
            <div class="col-md-5 grid">



                <div class="slider single-item">
                    <div><img src="<?=$product->image?>" /></div>
                    <div><img src="<?=$product->image?>" /></div>
                    <div><img src="<?=$product->image?>" /></div>
                    <div><img src="<?=$product->image?>" /></div>
                </div>



            </div>
            <div class="col-md-7 single-top-in">
                <div class="single-para simpleCart_shelfItem">
                    <h1><?=$product->name?></h1>
                    <p><?=$product->content?></p>
                    <div class="star-on">
                        <ul>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
                        </ul>
                        <div class="review">
                            <a href="#"> 3 reviews </a>/
                            <a href="#">  Write a review</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                    <label  class="add-to item_price">$<?=$product->price?></label>

                    <div class="available">
                        <h6>Available Options :</h6>
                        <ul>

                            <li>Size:<select>
                                    <option>Large</option>
                                    <option>Medium</option>
                                    <option>small</option>
                                    <option>Large</option>
                                    <option>small</option>
                                </select></li>
                            <li>Cost:
                                <select>
                                    <option>U.S.Dollar</option>
                                    <option>Euro</option>
                                </select></li>
                        </ul>
                    </div>
                    <a href="#" class="cart item_add">More details</a>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="content-top1">
                <div class="col-md-4 col-md3">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="<?=$product->image?>" alt="" />
                        </a>
                        <h3><a href="single.html">Jeans</a></h3>
                        <div class="price">
                            <h5 class="item_price">$300</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md3">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="<?=$product->image?>" alt="" />
                        </a>
                        <h3><a href="single.html">Tops</a></h3>
                        <div class="price">
                            <h5 class="item_price">$300</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-md3">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="<?=$product->image?>" alt="" />
                        </a>
                        <h3><a href="single.html">Tops</a></h3>
                        <div class="price">
                            <h5 class="item_price">$300</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
        <!----->
        <div class="col-md-3 product-bottom">
            <!--categories-->
            <div class=" rsidebar span_1_of_left">
                <h3 class="cate">Categories</h3>
                <ul class="menu-drop">
                    <?php foreach ($categories as $category) { ?>
                        <li class="item<?= $category->id ?>"><a href="<?= Url::to(['/site/product-list', 'id' => $category->id]) ?>"><?= $category->name ?></a>

                        </li>
                    <?php } ?>
                </ul>
            </div>
            <!--initiate accordion-->

            <!--//menu-->
            <!--seller-->
            <div class="product-bottom">
                <h3 class="cate">Best Sellers</h3>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/pr.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/pr1.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/pr2.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/pr3.jpg" alt=""></a>
                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="single.html" >Lorem ipsum dolor sitamet consectetuer  </a></h6>
                        <span class=" price-in1"> $40.00</span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <!--//seller-->
            <!--tag-->
            <div class="tag">
                <h3 class="cate">Tags</h3>
                <div class="tags">
                    <ul>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">dress</a></li>
                        <li><a href="#">design</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">lorem</a></li>
                        <li><a href="#">dress</a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>



