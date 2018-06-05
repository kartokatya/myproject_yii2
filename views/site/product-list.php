<?php
/**
 * Created by PhpStorm.
 * User: Mi
 * Date: 26/05/2018
 * Time: 14:45
 */

use yii\helpers\Url;

?>

<div class="products">
    <div class="container">
        <h1><?=$category->name?></h1>
        <div class="col-md-9">

            <div class="content-top1">
                <?php foreach ($products as $product):?>
                    <!--<h3><a  href="<?= Url::to(['/site/product', 'id'=>$product->id])?>"><?=$product->name?></a></h3>-->

                    <div class="col-md-4 col-md3">
                        <div class="col-md1 simpleCart_shelfItem">
                            <a href="<?= Url::to(['/site/product', 'id'=>$product->id])?>">
                                <img class="img-responsive" src="/images/pi1.png" alt="" />
                            </a>
                            <h3><a href="<?= Url::to(['/site/product', 'id'=>$product->id])?>"><?=$product->name?></a></h3>
                            <div class="price">
                                <h5 class="item_price">$<?=$product->price?></h5>
                                <input type="" class="item_quantity" value="1" />
                                <button class="btn  btn-sm btn-info btn-ord" data-id="<?=$product->id?>" >В корзину</button>

                                <?=$product->id?>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="clearfix"> </div>
            </div>

        </div>
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
            <script type="text/javascript">
                $(function() {
                    var menu_ul = $('.menu-drop > li > ul'),
                        menu_a  = $('.menu-drop > li > a');
                    menu_ul.hide();
                    menu_a.click(function(e) {
                        e.preventDefault();
                        if(!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true,true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true,true).slideUp('normal');
                        }
                    });

                });
            </script>
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