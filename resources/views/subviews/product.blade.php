@extends('layouts.layout')

@section('title', 'Market - Premium Multipurpose HTML5/CSS3 Theme')

@section('content')
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Smartphone & Tablets</a></li>
            <li><a href="#">Bint Beef</a></li>

        </ul>

        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-md-9 col-md-push-3 col-sm-12 col-xs-12">

                <div class="product-view row">
                    <div class="left-content-product col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="content-product-left  col-sm-6 col-xs-12 ">
                                <div class="large-image  ">
                                    <img itemprop="image" class="product-image-zoom"
                                         src="image/demo/shop/product/J9.jpg"
                                         data-zoom-image="image/demo/shop/product/J9.jpg" title="Bint Beef"
                                         alt="Bint Beef">
                                </div>

                                <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
                                    <a data-index="0" class="img thumbnail " data-image="image/demo/shop/product/J9.jpg"
                                       title="Bint Beef">
                                        <img src="image/demo/shop/product/J9.jpg" title="Bint Beef" alt="Bint Beef">
                                    </a>
                                    <a data-index="1" class="img thumbnail " data-image="image/demo/shop/product/J6.jpg"
                                       title="Bint Beef">
                                        <img src="image/demo/shop/product/J6.jpg" title="Bint Beef" alt="Bint Beef">
                                    </a>
                                    <a data-index="02" class="img thumbnail "
                                       data-image="image/demo/shop/product/J5.jpg" title="Bint Beef">
                                        <img src="image/demo/shop/product/J5.jpg" title="Bint Beef" alt="Bint Beef">
                                    </a>
                                    <a data-index="3" class="img thumbnail " data-image="image/demo/shop/product/J4.jpg"
                                       title="Bint Beef">
                                        <img src="image/demo/shop/product/J4.jpg" title="Bint Beef" alt="Bint Beef">
                                    </a>
                                </div>

                            </div>

                            <div class="content-product-right col-sm-6 col-xs-12">
                                <div class="title-product">
                                    <h1>Bint Beef</h1>
                                </div>
                                <!-- Review ---->
                                <div class="box-review form-group">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                        </div>
                                    </div>

                                    <a class="reviews_button" href=""
                                       onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0
                                        reviews</a> |
                                    <a class="write_review_button" href=""
                                       onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a
                                        review</a>
                                </div>

                                <div class="product-label form-group">
                                    <div class="product_page_price price" itemprop="offerDetails" itemscope=""
                                         itemtype="http://data-vocabulary.org/Offer">
                                        <span class="price-new" itemprop="price">$114.00</span>
                                        <span class="price-old">$122.00</span>
                                    </div>
                                    <div class="stock"><span>Availability:</span> <span
                                                class="status-stock">In Stock</span></div>
                                </div>

                                <div class="product-box-desc">
                                    <div class="inner-box-desc">
                                        <div class="price-tax"><span>Ex Tax:</span> $60.00</div>
                                        <div class="reward"><span>Price in reward points:</span> 400</div>
                                        <div class="brand"><span>Brand:</span><a href="#">Apple</a></div>
                                        <div class="model"><span>Product Code:</span> Product 15</div>
                                        <div class="reward"><span>Reward Points:</span> 100</div>
                                    </div>
                                </div>


                                <div id="product">
                                    <h4>Available Options</h4>
                                    <div class="image_option_type form-group required">
                                        <label class="control-label">Colors</label>
                                        <ul class="product-options clearfix" id="input-option231">
                                            <li class="radio">
                                                <label>
                                                    <input class="image_radio" type="radio" name="option[231]"
                                                           value="33"> <img src="image/demo/colors/blue.jpg"
                                                                            data-original-title="blue +$12.00"
                                                                            class="img-thumbnail icon icon-color"> <i
                                                            class="fa fa-check"></i>
                                                    <label> </label>
                                                </label>
                                            </li>
                                            <li class="radio">
                                                <label>
                                                    <input class="image_radio" type="radio" name="option[231]"
                                                           value="34"> <img src="image/demo/colors/brown.jpg"
                                                                            data-original-title="brown -$12.00"
                                                                            class="img-thumbnail icon icon-color"> <i
                                                            class="fa fa-check"></i>
                                                    <label> </label>
                                                </label>
                                            </li>
                                            <li class="radio">
                                                <label>
                                                    <input class="image_radio" type="radio" name="option[231]"
                                                           value="35"> <img src="image/demo/colors/green.jpg"
                                                                            data-original-title="green +$12.00"
                                                                            class="img-thumbnail icon icon-color"> <i
                                                            class="fa fa-check"></i>
                                                    <label> </label>
                                                </label>
                                            </li>
                                            <li class="selected-option">
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="box-checkbox form-group required">
                                        <label class="control-label">Checkbox</label>
                                        <div id="input-option232">
                                            <div class="checkbox">
                                                <label for="checkbox_1"><input type="checkbox" name="option[232][]"
                                                                               value="36" id="checkbox_1"> Checkbox 1
                                                    (+$12.00)</label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox_2"><input type="checkbox" name="option[232][]"
                                                                               value="36" id="checkbox_2"> Checkbox 2
                                                    (+$36.00)</label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox_3"><input type="checkbox" name="option[232][]"
                                                                               value="36" id="checkbox_3"> Checkbox 3
                                                    (+$24.00)</label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox_4"><input type="checkbox" name="option[232][]"
                                                                               value="36" id="checkbox_4"> Checkbox 4
                                                    (+$48.00)</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group box-info-product">
                                        <div class="option quantity">
                                            <div class="input-group quantity-control" unselectable="on"
                                                 style="-webkit-user-select: none;">
                                                <label>Qty</label>
                                                <input class="form-control" type="text" name="quantity"
                                                       value="1">
                                                <input type="hidden" name="product_id" value="50">
                                                <span class="input-group-addon product_quantity_down">−</span>
                                                <span class="input-group-addon product_quantity_up">+</span>
                                            </div>
                                        </div>
                                        <div class="cart">
                                            <input type="button" data-toggle="tooltip" title="" value="Add to Cart"
                                                   data-loading-text="Loading..." id="button-cart"
                                                   class="btn btn-mega btn-lg" onclick="cart.add('42', '1');"
                                                   data-original-title="Add to Cart">
                                        </div>
                                        <div class="add-to-links wish_comp">
                                            <ul class="blank list-inline">
                                                <li class="wishlist">
                                                    <a class="icon" data-toggle="tooltip" title=""
                                                       onclick="wishlist.add('50');"
                                                       data-original-title="Add to Wish List"><i
                                                                class="fa fa-heart"></i>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a class="icon" data-toggle="tooltip" title=""
                                                       onclick="compare.add('50');"
                                                       data-original-title="Compare this Product"><i
                                                                class="fa fa-exchange"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                                <!-- end box info product -->

                            </div>
                        </div>
                    </div>

                </div>

                <!-- Product Tabs -->
                <div class="producttab ">
                    <div class="tabsslider  col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
                        </ul>
                        <div class="tab-content col-xs-12">
                            <div id="tab-1" class="tab-pane fade active in">
                                <p>Lorem ipsum dolor sit amet, consetetursadipscing elitr, sed diam nonumy eirmodtempor
                                    invidunt ut labore et doloremagna aliquyam erat, sed diam voluptua.</p>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,no
                                    sea takimata sanctus est Lorem ipsumdolor sit amet. Lorem ipsum dolor sitamet,
                                    consetetur sadipscing elitr, seddiam nonumy eirmod tempor invidunt ut labore et
                                    dolore magna aliquyam erat,sed diam voluptua. </p>
                                <p>At vero eos et accusam et justo duo dolores
                                    et ea rebum. Stet clita kasd gubergren,
                                    no sea takimata sanctus est Lorem ipsum
                                    dolor sit amet. Lorem ipsum dolor sit
                                    amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod tempor invidunt ut
                                    labore et dolore magna aliquyam erat,
                                    sed diam voluptua. At vero eos et accusam
                                    et justo duo dolores et ea rebum. Stet
                                    clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet.
                                    <br>
                                </p>

                            </div>
                            <div id="tab-review" class="tab-pane fade">
                                <form>
                                    <div id="review">
                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                            <tr>
                                                <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                <td class="text-right">29/07/2015</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>Best this product opencart</p>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-1x"></i><i
                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-1x"></i></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="text-right"></div>
                                    </div>
                                    <h2 id="review-title">Write a review</h2>
                                    <div class="contacts-form">
                                        <div class="form-group"><span class="icon icon-user"></span>
                                            <input type="text" name="name" class="form-control" value="Your Name"
                                                   onblur="if (this.value == '') {this.value = 'Your Name';}"
                                                   onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                        </div>
                                        <div class="form-group"><span class="icon icon-bubbles-2"></span>
                                            <textarea class="form-control" name="text"
                                                      onblur="if (this.value == '') {this.value = 'Your Review';}"
                                                      onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                        </div>
                                        <span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>

                                        <div class="form-group">
                                            <b>Rating</b> <span>Bad</span>&nbsp;
                                            <input type="radio" name="rating" value="1"> &nbsp;
                                            <input type="radio" name="rating"
                                                   value="2"> &nbsp;
                                            <input type="radio" name="rating"
                                                   value="3"> &nbsp;
                                            <input type="radio" name="rating"
                                                   value="4"> &nbsp;
                                            <input type="radio" name="rating"
                                                   value="5"> &nbsp;<span>Good</span>

                                        </div>
                                        <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="tab-4" class="tab-pane fade">
                                <a href="#">Monitor</a>,
                                <a href="#">Apple</a>
                            </div>
                            <div id="tab-5" class="tab-pane fade">
                                <p>Lorem ipsum dolor sit amet, consetetur
                                    sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore
                                    magna aliquyam erat, sed diam voluptua.
                                    At vero eos et accusam et justo duo
                                    dolores et ea rebum. Stet clita kasd
                                    gubergren, no sea takimata sanctus est
                                    Lorem ipsum dolor sit amet. Lorem ipsum
                                    dolor sit amet, consetetur sadipscing
                                    elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam
                                    erat, sed diam voluptua. </p>
                                <p>At vero eos et accusam et justo duo dolores
                                    et ea rebum. Stet clita kasd gubergren,
                                    no sea takimata sanctus est Lorem ipsum
                                    dolor sit amet. Lorem ipsum dolor sit
                                    amet, consetetur sadipscing elitr.</p>
                                <p>Sed diam nonumy eirmod tempor invidunt
                                    ut labore et dolore magna aliquyam erat,
                                    sed diam voluptua. At vero eos et accusam
                                    et justo duo dolores et ea rebum. Stet
                                    clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Product Tabs -->

                <!-- Related Products -->
                <div class="related titleLine products-list grid module ">
                    <h3 class="modtitle">Related Products </h3>
                    <div class="releate-products ">
                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="image/demo/shop/product/e11.jpg" title="Apple Cinema 30&quot;"
                                             class="img-responsive"/>
                                        <img src="image/demo/shop/product/e12.jpg" title="Apple Cinema 30&quot;"
                                             class="img_0 img-responsive"/>
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"
                                       href="quickview.html"> Quickview</a>
                                    <!--end full quick view block-->
                                </div>

                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$74.00</span>
                                            <span class="price-old">$122.00</span>
                                            <span class="label label-percent">-40%</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut l..</p>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip"
                                                title="Add to Cart" onclick="cart.add('42', '1');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip"
                                                title="Compare this Product" onclick="compare.add('42');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div><!-- right block -->

                            </div>
                        </div>
                        <div class="product-layout ">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="image/demo/shop/product/11.jpg" title="Apple Cinema 30&quot;"
                                             class="img-responsive"/>
                                        <img src="image/demo/shop/product/10.jpg" title="Apple Cinema 30&quot;"
                                             class="img_0 img-responsive"/>

                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"
                                       href="quickview.html"> Quickview</a>
                                    <!--end full quick view block-->
                                </div>


                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$74.00</span>
                                            <span class="price-old">$122.00</span>
                                            <span class="label label-percent">-40%</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut l..</p>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip"
                                                title="Add to Cart" onclick="cart.add('42', '1');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip"
                                                title="Compare this Product" onclick="compare.add('42');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div><!-- right block -->

                            </div>
                        </div>
                        <div class="product-layout ">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="image/demo/shop/product/35.jpg" title="Apple Cinema 30&quot;"
                                             class="img-responsive"/>
                                        <img src="image/demo/shop/product/34.jpg" title="Apple Cinema 30&quot;"
                                             class="img_0 img-responsive"/>
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"
                                       href="quickview.html"> Quickview</a>
                                    <!--end full quick view block-->
                                </div>


                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$74.00</span>
                                            <span class="price-old">$122.00</span>
                                            <span class="label label-percent">-40%</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut l..</p>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip"
                                                title="Add to Cart" onclick="cart.add('42', '1');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip"
                                                title="Compare this Product" onclick="compare.add('42');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div><!-- right block -->

                            </div>
                        </div>
                        <div class="product-layout ">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="image/demo/shop/product/14.jpg" title="Apple Cinema 30&quot;"
                                             class="img-responsive"/>
                                        <img src="image/demo/shop/product/15.jpg" title="Apple Cinema 30&quot;"
                                             class="img_0 img-responsive"/>
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"
                                       href="quickview.html"> Quickview</a>
                                    <!--end full quick view block-->
                                </div>


                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30&quot;</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$74.00</span>
                                            <span class="price-old">$122.00</span>
                                            <span class="label label-percent">-40%</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod tempor invidunt ut l..</p>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip"
                                                title="Add to Cart" onclick="cart.add('42', '1');"><i
                                                    class="fa fa-shopping-cart"></i> <span
                                                    class="hidden-xs">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List" onclick="wishlist.add('42');"><i
                                                    class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip"
                                                title="Compare this Product" onclick="compare.add('42');"><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div><!-- right block -->

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            @include('partials.sidebar')
        </div>
        <!--Middle Part End-->
    </div>
    <!-- //Main Container -->
@endsection