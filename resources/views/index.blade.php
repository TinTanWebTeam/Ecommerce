@extends('layouts.layout')

@section('title', 'Market - Premium Multipurpose HTML5/CSS3 Theme')

@section('content')

<div class="row">

            <div id="content" class="col-md-9 col-md-push-3 col-sm-12 col-xs-12">


<div class="module tab-slider titleLine">
    <h3 class="modtitle">Featured Product</h3>
    <div id="so_listing_tabs_3" class="so-listing-tabs first-load module">
        <div class="loadeding"></div>
        <div class="ltabs-wrap ">
            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="http://localhost/ytc_templates/opencart/so_market/" data-type_source="0">
                <!--Begin Tabs-->
                <div class="ltabs-tabs-wrap">
                <span class="ltabs-tab-selected">Jewelry &amp; Watches  </span> <span class="ltabs-tab-arrow">▼</span>
                    <div class="item-sub-cat">
                        <ul class="ltabs-tabs cf">
                            <li class="ltabs-tab tab-sel" data-category-id="20" data-active-content=".items-category-20"> <span class="ltabs-tab-label">Jewelry &amp; Watches                       </span> </li>
                            <li class="ltabs-tab " data-category-id="18" data-active-content=".items-category-18"> <span class="ltabs-tab-label">Electronics        </span> </li>
                            <li class="ltabs-tab " data-category-id="25" data-active-content=".items-category-25"> <span class="ltabs-tab-label">Sports &amp; Outdoors  </span> </li>
                        </ul>
                    </div>
                </div>
                <!-- End Tabs-->
            </div>
            <div class="ltabs-items-container">
                <!--Begin Items-->
                <div class="ltabs-items ltabs-items-selected items-category-20 grid" data-total="10">
                    <div class="ltabs-items-inner ltabs-slider ">
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/J9.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/J5.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Cupim Bris</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$50.00</span>
                                            <span class="price-old">$62.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/m1.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/m3.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--New Label-->
                                    <span class="label label-new">New</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Cisi Chicken </a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$59.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/B10.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/B9.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Bint Beef</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/W1.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/w10.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Dail Lulpa</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/B5.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/B10.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Et Spare</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$65.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="ltabs-items items-category-18 grid" data-total="11">
                    <div class="ltabs-items-inner ltabs-slider ">
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/e11.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/E3.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30"</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$50.00</span>
                                            <span class="price-old">$62.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/141.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/11.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html"> Canon EOS 5D</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$60.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/35.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/34.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Filet Mign</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                            <span class="price-old">$122.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/E3_1.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/E3_3.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">HP LP3065</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$60.00</span>
                                            <span class="price-old">$100.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>

                    </div>

                </div>
                <div class="ltabs-items  items-category-25 grid" data-total="11">
                    <div class="ltabs-items-inner ltabs-slider ">

                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/141.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/11.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html"> Dail Lulpa</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$78.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/B10.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/B9.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Bint Beef</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                            <span class="price-old">$122.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('image/demo/shop/product/W1.jpg') }}"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('image/demo/shop/product/w10.jpg') }}"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Beef Bint</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$90.00</span>
                                            <span class="price-old">$100.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Bint Beef</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Items-->


        </div>

    </div>
</div>

                <div class="module">
                    <div class="modcontent clearfix">
                        <div class="banner-wraps ">
                            <div class="m-banner row">
                                <div class="banner htmlconten1 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="banners">
                                        <div>
                                            <a href="#"><img src="{{ URL::to('') }}image/demo/cms/banner2-1.png" alt="banner1"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="htmlconten2 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="banners" style="margin-bottom:20px;">
                                            <div>
                                                <a href="#"><img src="{{ URL::to('') }}image/demo/cms/banner2-2.png" alt="banner1"></a>
                                            </div>
                                    </div>

                                    <div class="banners">
                                        <div>
                                            <a href="#"><img src="{{ URL::to('') }}image/demo/cms/banner2-3.png" alt="banner1"></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="banner htmlconten3 hidden-sm col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="banners">
                                        <div>
                                            <a href="#"><img src="{{ URL::to('') }}image/demo/cms/banner2-4.png" alt="banner1"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="module tab-slider titleLine">
    <h3 class="modtitle">New Products</h3>
    <div id="so_listing_tabs_4" class="so-listing-tabs first-load module">
        <div class="loadeding"></div>
        <div class="ltabs-wrap ">
            <div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="http://localhost/ytc_templates/opencart/so_market/" data-type_source="0">
                <!--Begin Tabs-->
                <div class="ltabs-tabs-wrap">
                <span class="ltabs-tab-selected">Jewelry &amp; Watches  </span> <span class="ltabs-tab-arrow">▼</span>
                    <div class="item-sub-cat">
                        <ul class="ltabs-tabs cf">
                            <li class="ltabs-tab tab-sel" data-category-id="1" data-active-content=".items-category-1"> <span class="ltabs-tab-label">Jewelry &amp; Watches                     </span> </li>
                            <li class="ltabs-tab " data-category-id="2" data-active-content=".items-category-2"> <span class="ltabs-tab-label">Electronics      </span> </li>
                            <li class="ltabs-tab " data-category-id="3" data-active-content=".items-category-3"> <span class="ltabs-tab-label">Sports &amp; Outdoors    </span> </li>
                        </ul>
                    </div>
                </div>
                <!-- End Tabs-->
            </div>
            <div class="ltabs-items-container">
                <!--Begin Items-->
                <div class="ltabs-items  ltabs-items-selected items-category-1 grid" data-total="10">
                    <div class="ltabs-items-inner ltabs-slider ">

                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Bint Beef</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/W1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/w10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Dail Lulpa</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Et Spare</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$65.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/J9.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/J5.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Cupim Bris</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$50.00</span>
                                            <span class="price-old">$62.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/m1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/m3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--New Label-->
                                    <span class="label label-new">New</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Cisi Chicken </a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$59.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="ltabs-items  items-category-2 grid" data-total="11">

                    <div class="ltabs-items-inner ltabs-slider ">
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/e11.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/E3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Apple Cinema 30"</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$50.00</span>
                                            <span class="price-old">$62.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/11.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html"> Canon EOS 5D</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$60.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/35.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/34.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Filet Mign</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                            <span class="price-old">$122.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/E3_1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/E3_3.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">HP LP3065</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$60.00</span>
                                            <span class="price-old">$100.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>

                    </div>

                </div>
                <div class="ltabs-items items-category-3 grid" data-total="11">
                    <div class="ltabs-items-inner ltabs-slider ">

                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/141.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/11.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html"> Dail Lulpa</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$78.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B9.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Bint Beef</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                            <span class="price-old">$122.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/W1.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/w10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>
                                    <!--Sale Label-->
                                    <span class="label label-sale">Sale</span>
                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Beef Bint</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$90.00</span>
                                            <span class="price-old">$100.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        <div class="ltabs-item product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container second_img ">
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B5.jpg"  alt="Apple Cinema 30&quot;" class="img-responsive" />
                                        <img src="{{ URL::to('') }}image/demo/shop/product/B10.jpg"  alt="Apple Cinema 30&quot;" class="img_0 img-responsive" />
                                    </div>

                                    <!--full quick view block-->
                                    <a class="quickview iframe-link visible-lg" data-fancybox-type="iframe"  href="quickview.html">  Quickview</a>
                                    <!--end full quick view block-->
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">Bint Beef</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">$97.00</span>
                                        </div>
                                    </div>

                                      <div class="button-group">
                                        <button class="addToCart" type="button" data-toggle="tooltip" title="Add to Cart" onclick="cart.add('42', '1');"><i class="fa fa-shopping-cart"></i> <span class="">Add to Cart</span></button>
                                        <button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i></button>
                                        <button class="compare" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i></button>
                                      </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End Items-->


        </div>

    </div>
</div>

                <div class="module no-margin titleLine ">
                    <h3 class="modtitle">COLLECTIONS</h3>
                    <div class="modcontent clearfix">
                        <div id="collections_block" class="clearfix  block">
                            <ul class="width6">
                                <li class="collect collection_0">
                                    <div class="color_co"><a href="#">Furniture</a> </div>
                                </li>
                                <li class="collect collection_1">
                                    <div class="color_co"><a href="#">Gift idea</a> </div>
                                </li>
                                <li class="collect collection_2">
                                    <div class="color_co"><a href="#">Cool gadgets</a> </div>
                                </li>
                                <li class="collect collection_3">
                                    <div class="color_co"><a href="#">Outdoor activities</a> </div>
                                </li>
                                <li class="collect collection_4">
                                    <div class="color_co"><a href="#">Accessories for</a> </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            @include('subviews.sidebar')


        </div>
@endsection