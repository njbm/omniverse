<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>

<!doctype html>
<html class="no-js" lang="en">
<?php include_once('partials/head.php'); ?>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!--Start-Preloader-area-->
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>
    <!--end-Preloader-area-->
    <!--header-area-start-->
    <!--Start-main-wrapper-->
    <div class="Home-page">
        <!--Start-Header-area-->

        <?php include_once('partials/header.php'); ?>
        <!--End-Header-area-->


        <!--start-single-heading-banner Slider-->

        <?php include_once($frontend_partials . 'slider.php'); ?>

        <!--end-single-heading-banner Slider-->

        <!--start-single-heading-->
        <div class="signle-heading">
            <div class="container">
                <div class="row">
                    <!--start-shop-head -->
                    <div class="col-lg-12">
                        <div class="shop-head-menu">
                            <ul>

                                <li>Home</li>
                            </ul>
                        </div>
                    </div>
                    <!--end-shop-head-->
                </div>
            </div>
        </div>
        <!--end-single-heading-->
        <!--start-shop-product-area-->
        <div class="shop-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <!-- Left-Sidebar-start-->
                        <div class="left-sidebar-title">
                            <h2>Shopping Options</h2>
                        </div>
                        <!-- Shop-Layout-start -->
                        <div class="left-sidebar">
                            <div class="shop-layout">
                                <div class="layout-title">
                                    <h2>Category</h2>
                                </div>
                                <div class="layout-list">
                                    <ul>
                                        <li><a href="#">Bags</a><span>(9)</span></li>
                                        <li><a href="#">Tops & Tees</a><span>(8)</span></li>
                                        <li><a href="#">Shirts</a><span>(10)</span></li>
                                        <li><a href="#">Polo Shirts</a><span>(12)</span></li>
                                        <li><a href="#">jeans pants</a><span>(15)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Shop-Layout-end -->
                            <!-- Price-Filter-start -->
                            <div class="price-filter-area shop-layout">
                                <div class="price-filter">
                                    <div class="layout-title">
                                        <h2>Price</h2>
                                    </div>
                                    <p>
                                        <label class="range-text">Range:</label>
                                        <input type="text" style="border:0; color:#f6931f; font-weight:bold;" readonly="" id="amount">
                                    </p>
                                    <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span>
                                    </div>
                                    <button class="btn btn-default">show</button>
                                </div>
                            </div>
                            <!-- Price-Filter-end -->
                            <!-- Shop-Layout-start -->
                            <div class="shop-layout">
                                <div class="layout-title">
                                    <h2>Manufacturer</h2>
                                </div>
                                <div class="layout-list">
                                    <ul>
                                        <li><a href="#">Adidas</a><span>(2)</span></li>
                                        <li><a href="#">Chanel</a><span>(2)</span></li>
                                        <li><a href="#">DKNY</a><span>(1)</span></li>
                                        <li><a href="#">Dolce</a><span>(2)</span></li>
                                        <li><a href="#">Gabbana</a><span>(3)</span></li>
                                        <li><a href="#">Nike</a><span>(4)</span></li>
                                        <li><a href="#">Vogue</a><span>(2)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Shop-Layout-end -->
                            <!-- Shop-Layout-start -->
                            <div class="shop-layout">
                                <div class="layout-title">
                                    <h2>Color</h2>
                                </div>
                                <div class="layout-list">
                                    <ul>
                                        <li><a href="#">Black</a><span>(1)</span></li>
                                        <li><a href="#">Blue</a><span>(2)</span></li>
                                        <li><a href="#">Brown</a><span>(3)</span></li>
                                        <li><a href="#">Pink</a><span>(3)</span></li>
                                        <li><a href="#">Red</a><span>(2)</span></li>
                                        <li><a href="#">White</a><span>(2)</span></li>
                                        <li><a href="#">Yellow</a><span>(3)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Shop-Layout-end -->
                        </div>
                        <!-- End-Left-Sidebar -->
                        <!-- Shop-compare-start -->
                        <div class="shop-banner-area">
                            <div class="left-sidebar-title">
                                <h2 class="compare-title contact">Compare Products</h2>
                            </div>
                            <div class="layout-list compare">
                                <ul>
                                    <li><a href="#">occaecati cupiditate</a><span class="compare-icon"><i class="fa fa-trash"></i></span></li>
                                    <li><a href="#">consequences</a><span class="compare-icon"><i class="fa fa-trash"></i></span></li>
                                    <li><a href="#">pleasure rationally</a><span class="compare-icon"><i class="fa fa-trash"></i></span></li>
                                </ul>
                                <div class="compare-action">
                                    <div class="clear-button">
                                        <a href="#">clear all</a>
                                    </div>
                                    <div class="product-cart compare">
                                        <button class="button">compare</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop-compare-end -->
                        <!-- Shop-Layout-Banner-start -->
                        <div class="shop-banner-area banner-r-b">
                            <div class="single-banner">
                                <div class="single-banner">
                                    <a href="#"><img alt="Hi Guys" src="assets/images/banner/18.jpg" /></a>
                                </div>
                            </div>
                        </div>
                        <!-- Shop-Layout-Banner-end -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <!-- Shop-Product-View-start -->
                        <div class="shop-product-view">
                            <!-- Shop Product Tab Area -->
                            <div class="product-tab-area">
                                <!-- Tab Bar -->
                                <div class="tab-bar">
                                    <div class="tab-bar-inner">
                                        <ul role="tablist" class="nav nav-tabs">
                                            <li class="active"><a title="Grid" data-toggle="tab" href="#shop-product"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                            <li><a title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="toolbar">
                                        <div class="sorter">
                                            <div class="sort-by">
                                                <label class="sort-none">Sort By</label>
                                                <select>
                                                    <option value="position">Position</option>
                                                    <option value="name">Name</option>
                                                    <option value="price">Price</option>
                                                </select>
                                                <a class="up-arrow" href="#"><i class="fa fa-long-arrow-up"></i></a>
                                            </div>
                                        </div>
                                        <div class="pager-list">
                                            <div class="limiter">
                                                <label>Show</label>
                                                <select>
                                                    <option value="9">9</option>
                                                    <option value="12">12</option>
                                                    <option value="24">24</option>
                                                    <option value="36">36</option>
                                                </select>
                                                per page
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End-Tab-Bar -->
                                <!-- Tab-Content -->
                                <div class="tab-content">
                                    <!-- Shop Product-->
                                    <div id="shop-product" class="tab-pane active">
                                        <div class="row">
                                            <!-- Start-single-product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-mar-bottom">
                                                    <div class="sale">Sale</div>
                                                    <div class="sale-border"></div>
                                                    <div class="new">new</div>
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="assets/images/product/10.jpg" alt="product-image" /></a>
                                                        <div class="add-to-link">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" title="add to cart">
                                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="product-content">
                                                            <a href="#">
                                                                <h3 class="pro-name">Sample Product</h3>
                                                            </a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">$200.00</span>
                                                                <span class="old-price"><del>$220.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End-single-product -->
                                            <!-- Start-single-product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-mar-bottom">
                                                    <div class="sale">Sale</div>
                                                    <div class="sale-border"></div>
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="assets/images/product/1.jpg" alt="product-image" /></a>
                                                        <div class="add-to-link">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" title="add to cart">
                                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="product-content">
                                                            <a href="#">
                                                                <h3 class="pro-name">Sample Product</h3>
                                                            </a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">$250.00</span>
                                                                <span class="old-price"><del>$280.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End-single-product -->
                                            <!-- Start-single-product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-mar-bottom">
                                                    <div class="new">new</div>
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="assets/images/product/16.jpg" alt="product-image" /></a>
                                                        <div class="add-to-link">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" title="add to cart">
                                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="product-content">
                                                            <a href="#">
                                                                <h3 class="pro-name">Sample Product</h3>
                                                            </a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">150.00</span>
                                                                <span class="old-price"><del>$200.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End-single-product -->
                                            <!-- Start-single-product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-mar-bottom">
                                                    <div class="new">new</div>
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="assets/images/product/6.jpg" alt="product-image" /></a>
                                                        <div class="add-to-link">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" title="add to cart">
                                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="product-content">
                                                            <a href="#">
                                                                <h3 class="pro-name">Sample Product</h3>
                                                            </a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">$200.00</span>
                                                                <span class="old-price"><del>$220.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End-single-product -->
                                            <!-- Start-single-product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-mar-bottom">
                                                    <div class="sale">Sale</div>
                                                    <div class="sale-border"></div>
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="assets/images/product/8.jpg" alt="product-image" /></a>
                                                        <div class="add-to-link">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" title="add to cart">
                                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="product-content">
                                                            <a href="#">
                                                                <h3 class="pro-name">Sample Product</h3>
                                                            </a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">$250.00</span>
                                                                <span class="old-price"><del>$280.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End-single-product -->
                                            <!-- Start-single-product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-mar-bottom">
                                                    <div class="new">new</div>
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="assets/images/product/15.jpg" alt="product-image" /></a>
                                                        <div class="add-to-link">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" title="add to cart">
                                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="product-content">
                                                            <a href="#">
                                                                <h3 class="pro-name">Sample Product</h3>
                                                            </a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">150.00</span>
                                                                <span class="old-price"><del>$200.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End-single-product -->
                                            <!-- Start-single-product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-mar-bottom">
                                                    <div class="sale">Sale</div>
                                                    <div class="sale-border"></div>
                                                    <div class="new">new</div>
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="assets/images/product/2.jpg" alt="product-image" /></a>
                                                        <div class="add-to-link">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" title="add to cart">
                                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="product-content">
                                                            <a href="#">
                                                                <h3 class="pro-name">Sample Product</h3>
                                                            </a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">$200.00</span>
                                                                <span class="old-price"><del>$220.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End-single-product -->
                                            <!-- Start-single-product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-mar-bottom">
                                                    <div class="sale">Sale</div>
                                                    <div class="sale-border"></div>
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="assets/images/product/4.jpg" alt="product-image" /></a>
                                                        <div class="add-to-link">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" title="add to cart">
                                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="product-content">
                                                            <a href="#">
                                                                <h3 class="pro-name">Sample Product</h3>
                                                            </a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">$250.00</span>
                                                                <span class="old-price"><del>$280.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End-single-product -->
                                            <!-- Start-single-product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="single-product shop-mar-bottom">
                                                    <div class="new">new</div>
                                                    <div class="product-img-wrap">
                                                        <a class="product-img" href="#"> <img src="assets/images/product/7.jpg" alt="product-image" /></a>
                                                        <div class="add-to-link">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a data-toggle="modal" data-target="#productModal" href="#">
                                                                <div><i class="fa fa-eye"></i><span>Quick view</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a href="#" title="add to cart">
                                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info text-center">
                                                        <div class="product-content">
                                                            <a href="#">
                                                                <h3 class="pro-name">Sample Product</h3>
                                                            </a>
                                                            <div class="pro-rating">
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="price-text">Price:</span>
                                                                <span class="normal-price">150.00</span>
                                                                <span class="old-price"><del>$200.00</del></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End-single-product -->
                                        </div>
                                    </div>
                                    <!-- End-Shop-Product-->
                                    <!-- Shop List -->
                                    <div id="shop-list" class="tab-pane">
                                        <!-- start-Single-Shop-list-->
                                        <div class="single-shop">
                                            <div class="row">
                                                <!-- single-product-start -->
                                                <div class="single-product">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="assets/images/product/14.jpg" alt="product-image" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="product-info text-left">
                                                            <div class="product-content shop">
                                                                <a href="#">
                                                                    <h3 class="pro-name">Sample Product</h3>
                                                                </a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">150.00</span>
                                                                    <span class="old-price"><del>$200.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="shop-article text-left">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                        </div>
                                                        <div class="shop-button-area">
                                                            <div class="add-to-cartbest shop">
                                                                <a href="#" title="add to cart">
                                                                    <div><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-link shop">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-end -->
                                            </div>
                                        </div>
                                        <!-- end-Single-Shop-list-->
                                        <!-- start-Single-Shop-list-->
                                        <div class="single-shop">
                                            <div class="row">
                                                <!-- single-product-start -->
                                                <div class="single-product">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="assets/images/product/1.jpg" alt="product-image" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="product-info text-left">
                                                            <div class="product-content shop">
                                                                <a href="#">
                                                                    <h3 class="pro-name">Sample Product</h3>
                                                                </a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">200.00</span>
                                                                    <span class="old-price"><del>$2050.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="shop-article text-left">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                        </div>
                                                        <div class="shop-button-area">
                                                            <div class="add-to-cartbest shop">
                                                                <a href="#" title="add to cart">
                                                                    <div><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-link shop">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-end -->
                                            </div>
                                        </div>
                                        <!-- end-Single-Shop-list-->
                                        <!-- start-Single-Shop-list-->
                                        <div class="single-shop">
                                            <div class="row">
                                                <!-- single-product-start -->
                                                <div class="single-product">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="assets/images/product/8.jpg" alt="product-image" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="product-info text-left">
                                                            <div class="product-content shop">
                                                                <a href="#">
                                                                    <h3 class="pro-name">Sample Product</h3>
                                                                </a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">220.00</span>
                                                                    <span class="old-price"><del>$240.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="shop-article text-left">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                        </div>
                                                        <div class="shop-button-area">
                                                            <div class="add-to-cartbest shop">
                                                                <a href="#" title="add to cart">
                                                                    <div><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-link shop">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-end -->
                                            </div>
                                        </div>
                                        <!-- end-Single-Shop-list-->
                                        <!-- start-Single-Shop-list-->
                                        <div class="single-shop">
                                            <div class="row">
                                                <!-- single-product-start -->
                                                <div class="single-product">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="assets/images/product/7.jpg" alt="product-image" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="product-info text-left">
                                                            <div class="product-content shop">
                                                                <a href="#">
                                                                    <h3 class="pro-name">Sample Product</h3>
                                                                </a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">150.00</span>
                                                                    <span class="old-price"><del>$200.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="shop-article text-left">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                        </div>
                                                        <div class="shop-button-area">
                                                            <div class="add-to-cartbest shop">
                                                                <a href="#" title="add to cart">
                                                                    <div><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-link shop">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-end -->
                                            </div>
                                        </div>
                                        <!-- end-Single-Shop-list-->
                                        <!-- start-Single-Shop-list-->
                                        <div class="single-shop">
                                            <div class="row">
                                                <!-- single-product-start -->
                                                <div class="single-product">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="#"> <img src="assets/images/product/4.jpg" alt="product-image" /></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="product-info text-left">
                                                            <div class="product-content shop">
                                                                <a href="#">
                                                                    <h3 class="pro-name">Sample Product</h3>
                                                                </a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">180.00</span>
                                                                    <span class="old-price"><del>$200.00</del></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="shop-article text-left">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                        </div>
                                                        <div class="shop-button-area">
                                                            <div class="add-to-cartbest shop">
                                                                <a href="#" title="add to cart">
                                                                    <div><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="add-to-link shop">
                                                            <a href="#">
                                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                            </a>
                                                            <a href="#">
                                                                <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-end -->
                                            </div>
                                        </div>
                                        <!-- end-Single-Shop-list-->
                                    </div>
                                    <!-- End Shop List -->
                                </div>
                                <!-- End Tab Content -->
                                <!-- Tab Bar -->
                                <div class="tab-bar tab-bar-bottom">
                                    <div class="tab-bar-inner">
                                        <ul role="tablist" class="nav nav-tabs">
                                            <li class="active"><a title="Grid" data-toggle="tab" href="#shop"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                            <li><a title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="toolbar">
                                        <div class="sorter">
                                            <div class="sort-by">
                                                <label class="sort-none">Sort By</label>
                                                <select>
                                                    <option value="position">Position</option>
                                                    <option value="name">Name</option>
                                                    <option value="price">Price</option>
                                                </select>
                                                <a class="up-arrow" href="#"><i class="fa fa-long-arrow-up"></i></a>
                                            </div>
                                        </div>
                                        <div class="pages">
                                            <strong>Page:</strong>
                                            <ol>
                                                <li class="current">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#" title="Next"><i class="fa fa-arrow-right"></i></a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tab Bar -->
                            </div>
                            <!-- End Shop Product Tab Area -->
                        </div>
                        <!-- End Shop Product View -->
                    </div>
                </div>
            </div>
        </div>
        <!--shop-product-area-end-->
        <!--Start-newsletter-wrap-->
        <div class="news-letter-wrap shop-news text-center">
            <div class="container">
                <div class="row">
                    <div class="news-subscribe">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="letter-text">
                                <h3><span class="h-color">Don't</span> Miss Out <br> <span><img src="assets/images/newsletter/1.png" alt=""></span></h3>
                                <p>Subscribe for the latest styles and sales, plus get <span class="h-color">30%</span> offer <br> your first order.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="email-area">
                                <form class="input-group" action="#" method="post">
                                    <span class="input-group-addon icon-envlop">
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                    <input type="email" class="form-control form_text" placeholder="Enter your email address">
                                    <input type="submit" class="submit" value="Sign up">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End-newsletter-wrap-->
        <!-- checkout-area start -->

        <!--Start-footer-wrap-->
        <?php include_once($frontend_partials . 'footer.php') ?>
        <!--End-footer-wrap-->

    </div>
    <!--End-main-wrapper-->

    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- meanmenu.js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- nivo.slider.js -->

    <!-- jquery-ui js -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- scrollUp.min.js -->
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <!-- jquery.parallax.js -->
    <script src="assets/js/jquery.parallax.js"></script>
    <!-- sticky.js -->
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- jquery.simpleGallery.min.js -->
    <script src="assets/js/jquery.simpleGallery.min.js"></script>
    <script src="assets/js/jquery.simpleLens.min.js"></script>
    <!-- cascade-slider.js -->
    <script src="assets/js/cascade-slider.html"></script>
    <!-- countdown.min.js -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

<!-- Credit: Jaber Masud -->

</html>