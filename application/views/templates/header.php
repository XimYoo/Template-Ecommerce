<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title Of Site -->
    <title>Tugas Web Enterprise</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.css'); ?>">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style-min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom-styles.css'); ?>">
    <base href="<?= base_url() ?>">

</head>

<body class="template-index index-demo1">
    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!-- Marquee Text-->
        <!-- <div class="topbar-slider clearfix">
                <div class="container-fluid">
                    <div class="marquee-text">
                        <div class="top-info-bar d-flex">
                            <div class="flex-item center">
                                <a href="#">
                                    <span> <i class="anm anm-worldwide"></i> BUY ONLINE PICK UP IN STORE</span>
                                    <span> <i class="anm anm-truck-l"></i> FREE WORLDWIDE SHIPPING ON ALL ORDERS ABOVE $100</span>
                                    <span> <i class="anm anm-redo-ar"></i> EXTENDED RETURN UNTIL 30 DAYS</span>
                                </a>
                            </div>
                            <div class="flex-item center">
                                <a href="#">
                                    <span> <i class="anm anm-worldwide"></i> BUY ONLINE PICK UP IN STORE</span>
                                    <span> <i class="anm anm-truck-l"></i> FREE WORLDWIDE SHIPPING ON ALL ORDERS ABOVE $100</span>
                                    <span> <i class="anm anm-redo-ar"></i> EXTENDED RETURN UNTIL 30 DAYS</span>
                                </a>
                            </div>
                            <div class="flex-item center">
                                <a href="#">
                                    <span> <i class="anm anm-worldwide"></i> BUY ONLINE PICK UP IN STORE</span>
                                    <span> <i class="anm anm-truck-l"></i> FREE WORLDWIDE SHIPPING ON ALL ORDERS ABOVE $100</span>
                                    <span> <i class="anm anm-redo-ar"></i> EXTENDED RETURN UNTIL 30 DAYS</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <!--End Marquee Text -->

        <!--Top Header-->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-4 text-left">
                        <i class="icon anm anm-phone-l me-2"></i><a href="tel:401234567890">(+62) 812 895 36383</a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 text-center d-none d-md-block">
                        Free shipping on all orders over $99 <a href="#" class="text-link ms-1">Shop now</a>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-4 text-right d-flex align-items-center justify-content-end">
                        <div class="select-wrap language-picker float-start">
                            <ul class="default-option">
                                <li>
                                    <div class="option english">
                                        <div class="icon"><img src="<?php echo base_url('assets/images/flag/english.png'); ?>" alt="english" width="24" height="24" /></div><span>English</span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="select-ul">
                                <li>
                                    <div class="option english">
                                        <div class="icon"><img src="<?php echo base_url('assets/images/flag/english.png'); ?>" alt="english" width="24" height="24" /></div><span>English</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="option arabic">
                                        <div class="icon"><img src="<?php echo base_url('assets/images/flag/arabic.png'); ?>" alt="arabic" width="24" height="24" /></div><span>Arabic</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="option english">
                                        <div class="icon"><img src="<?php echo base_url('assets/images/flag/french.png'); ?>" alt="french" width="24" height="24" /></div><span>French</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="select-wrap currency-picker float-start">
                            <ul class="default-option">
                                <li>
                                    <div class="option USD">
                                        <div class="icon"><img src="<?php echo base_url('assets/images/flag/usd.png'); ?>" alt="usd" width="24" height="24" /></div><span>USD</span>
                                    </div>
                                </li>
                            </ul>
                            <ul class="select-ul">
                                <li>
                                    <div class="option USD">
                                        <div class="icon"><img src="<?php echo base_url('assets/images/flag/usd.png'); ?>" alt="usd" width="24" height="24" /></div><span>USD</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="option EUR">
                                        <div class="icon"><img src="<?php echo base_url('assets/images/flag/eur.png'); ?>" alt="eur" width="24" height="24" /></div><span>EUR</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="option GBP">
                                        <div class="icon"><img src="<?php echo base_url('assets/images/flag/gbp.png'); ?>" alt="gbp" width="24" height="24" /></div><span>GBP</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->

        <!--Header-->
        <header class="header d-flex align-items-center header-1 header-fixed">
            <div class="container">
                <div class="row">
                    <!--Logo-->
                    <div class="logo col-5 col-sm-3 col-md-3 col-lg-2 align-self-center">
                        <a class="logoImg" href="index.html"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Hema Multipurpose Html Template" title="Hema Multipurpose Html Template" width="149" height="39" /></a>
                    </div>
                    <!--End Logo-->
                    <!-- Menu -->
                    <div class="col-1 col-sm-1 col-md-1 col-lg-8 align-self-center d-menu-col">
                        <nav class="navigation" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav medium center">
                                <?php if (!empty($menus)): ?>
                                    <?php foreach ($menus as $menu): ?>
                                        <?php if ($menu->title == 'SHOP' && !empty($menu->children)): ?>
                                            <!-- SHOP menu item with megamenu -->
                                            <li class="lvl1 parent megamenu">
                                                <a href="<?= site_url($menu->url); ?>"><?= $menu->title; ?> <i class="icon anm anm-angle-down-l"></i></a>
                                                <div class="megamenu style1">
                                                    <ul class="row grid--uniform mmWrapper">
                                                        <?php foreach ($menu->children as $submenu): ?>
                                                            <li class="lvl-1 col-md-3 col-lg-3">
                                                                <a href="<?= site_url($submenu->url); ?>" class="site-nav lvl-1 menu-title"><?= $submenu->title; ?></a>
                                                                <?php if (!empty($submenu->children)): ?>
                                                                    <ul class="subLinks">
                                                                        <?php foreach ($submenu->children as $subSubmenu): ?>
                                                                            <li class="lvl-2"><a href="<?= site_url($subSubmenu->url); ?>" class="site-nav lvl-2"><?= $subSubmenu->title; ?></a></li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                <?php endif; ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                        <li class="lvl-1 col-md-3 col-lg-3 banner-col">
                                                            <div class="banner-wrap">
                                                                <a href="shop-left-sidebar.html">
                                                                    <img class="rounded-0 blur-up lazyload" data-src="assets/images/megamenu/banner-menu.jpg" src="assets/images/megamenu/banner-menu.jpg" alt="banner" width="300" height="240" />
                                                                </a>
                                                                <div class="banner-content">
                                                                    <h4>Hot deals</h4>
                                                                    <h3>Don't miss <br>Trending</h3>
                                                                    <div class="banner-save">Save up to 50%</div>
                                                                    <div class="banner-btn"><a href="shop-left-sidebar.html" class="btn">Shop now</a></div>
                                                                </div>
                                                                <div class="banner-discount">
                                                                    <h3><span>50%</span> Off</h3>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                        <?php elseif ($menu->title == 'PRODUCT' && !empty($menu->children)): ?>
                                            <!-- PRODUCT menu item with megamenu -->
                                            <li class="lvl1 parent megamenu">
                                                <a href="<?= site_url($menu->url); ?>"><?= $menu->title; ?> <i class="icon anm anm-angle-down-l"></i></a>
                                                <div class="megamenu style2">
                                                    <ul class="row mmWrapper">
                                                        <?php foreach ($menu->children as $submenu): ?>
                                                            <li class="lvl-1 col-md-3 col-lg-3">
                                                                <a href="<?= site_url($submenu->url); ?>" class="site-nav lvl-1 menu-title"><?= $submenu->title; ?></a>
                                                                <?php if (!empty($submenu->children)): ?>
                                                                    <ul class="subLinks">
                                                                        <?php foreach ($submenu->children as $subSubmenu): ?>
                                                                            <li class="lvl-2"><a href="<?= site_url($subSubmenu->url); ?>" class="site-nav lvl-2"><?= $subSubmenu->title; ?></a></li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                <?php endif; ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                        <li class="lvl-1 col-md-3 col-lg-6 product-col">
                                                            <div class="grid-products weekly-product gp10 mt-1">
                                                                <div class="item">
                                                                    <div class="product-wrap position-relative">
                                                                        <div class="product-image mb-0">
                                                                            <a href="product-layout1.html" class="product-img">
                                                                                <img class="rounded-0 blur-up lazyload" data-src="assets/images/megamenu/product1.jpg" src="assets/images/megamenu/product1.jpg" alt="Bodysuit Black" title="Bodysuit Black" width="625" height="800" />
                                                                            </a>
                                                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                                        </div>
                                                                        <div class="product-details text-center">
                                                                            <div class="product-name"><a class="fw-normal" href="product-layout1.html">Bodysuit Black</a></div>
                                                                            <div class="product-price">
                                                                                <span class="price old-price">$114.00</span><span class="price">$99.00</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                        <?php elseif ($menu->title == 'HOME' && !empty($menu->children)): ?>
                                            <!-- HOME menu item with dropdown -->
                                            <li class="lvl1 parent dropdown">
                                                <a href="<?= site_url($menu->url); ?>"><?= $menu->title; ?> <i class="icon anm anm-angle-down-l"></i></a>
                                                <ul class="dropdown">
                                                    <?php foreach ($menu->children as $submenu): ?>
                                                        <li><a href="<?= site_url($submenu->url); ?>" class="site-nav"><?= $submenu->title; ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>

                                        <?php elseif ($menu->title == 'PAGES' && !empty($menu->children)): ?>
                                            <!-- PAGES menu item with dropdown -->
                                            <li class="lvl1 parent dropdown">
                                                <a href="<?= site_url($menu->url); ?>"><?= $menu->title; ?> <i class="icon anm anm-angle-down-l"></i></a>
                                                <ul class="dropdown">
                                                    <?php foreach ($menu->children as $submenu): ?>
                                                        <li>
                                                            <a href="<?= site_url($submenu->url); ?>" class="site-nav"><?= $submenu->title; ?></a>
                                                            <?php if (!empty($submenu->children) && $submenu->title != 'Lookbook'): ?>
                                                                <ul class="dropdown">
                                                                    <?php foreach ($submenu->children as $subSubmenu): ?>
                                                                        <li><a href="<?= site_url($subSubmenu->url); ?>" class="site-nav"><?= $subSubmenu->title; ?></a></li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>

                                        <?php elseif ($menu->title == 'BLOG' && !empty($menu->children)): ?>
                                            <!-- BLOG menu item with dropdown -->
                                            <li class="lvl1 parent dropdown">
                                                <a href="<?= site_url($menu->url); ?>"><?= $menu->title; ?> <i class="icon anm anm-angle-down-l"></i></a>
                                                <ul class="dropdown">
                                                    <?php foreach ($menu->children as $submenu): ?>
                                                        <li><a href="<?= site_url($submenu->url); ?>" class="site-nav"><?= $submenu->title; ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </li>

                                        <?php else: ?>
                                            <!-- Single level menu item -->
                                            <li class="lvl1">
                                                <a href="<?= site_url($menu->url); ?>"><?= $menu->title; ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                    <!-- End Menu -->


                    <!--Right Icon-->
                    <div class="col-7 col-sm-9 col-md-9 col-lg-2 align-self-center icons-col text-right">
                        <!--Search-->
                        <div class="search-parent iconset">
                            <div class="site-search" title="Search">
                                <a href="#;" class="search-icon clr-none" data-bs-toggle="offcanvas" data-bs-target="#search-drawer"><i class="hdr-icon icon anm anm-search-l"></i></a>
                            </div>
                            <div class="search-drawer offcanvas offcanvas-top" tabindex="-1" id="search-drawer">
                                <div class="container">
                                    <div class="search-header d-flex-center justify-content-between mb-3">
                                        <h3 class="title m-0">What are you looking for?</h3>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="search-body">
                                        <form class="form minisearch" id="header-search" action="#" method="get">
                                            <!--Search Field-->
                                            <div class="d-flex searchField">
                                                <div class="search-category">
                                                    <select class="rgsearch-category rounded-end-0">
                                                        <option value="0">All Categories</option>
                                                        <option value="1">- All</option>
                                                        <option value="2">- Fashion</option>
                                                        <option value="3">- Shoes</option>
                                                        <option value="4">- Electronic</option>
                                                        <option value="5">- Jewelry</option>
                                                        <option value="6">- Vegetables</option>
                                                        <option value="7">- Furniture</option>
                                                        <option value="8">- Accessories</option>
                                                    </select>
                                                </div>
                                                <div class="input-box d-flex fl-1">
                                                    <input type="text" class="input-text border-start-0 border-end-0" placeholder="Search for products..." value="" />
                                                    <button type="submit" class="action search d-flex-justify-center btn rounded-start-0"><i class="icon anm anm-search-l"></i></button>
                                                </div>
                                            </div>
                                            <!--End Search Field-->
                                            <!--Search popular-->
                                            <div class="popular-searches d-flex-justify-center mt-3">
                                                <span class="title fw-600">Trending Now:</span>
                                                <div class="d-flex-wrap searches-items">
                                                    <a class="text-link ms-2" href="#">T-Shirt,</a>
                                                    <a class="text-link ms-2" href="#">Shoes,</a>
                                                    <a class="text-link ms-2" href="#">Bags</a>
                                                </div>
                                            </div>
                                            <!--End Search popular-->
                                            <!--Search products-->
                                            <div class="search-products">
                                                <ul class="items g-2 g-md-3 row row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
                                                    <li class="item empty w-100 text-center text-muted d-none">You don't have any items in your search.</li>
                                                    <li class="item">
                                                        <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                            <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="blur-up lazyload" data-src="assets/images/products/product1-120x170.jpg" src="assets/images/products/product1-120x170.jpg" alt="image" title="product" width="120" height="170" /></a></div>
                                                            <div class="ms-3 details text-left">
                                                                <div class="product-name"><a class="item-title" href="product-layout1.html">Oxford Cuban Shirt</a></div>
                                                                <div class="product-price"><span class="old-price">$114.00</span><span class="price">$99.00</span></div>
                                                                <div class="product-review d-flex align-items-center justify-content-start">
                                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i><i class="icon anm anm-star-o"></i>
                                                                    <span class="caption hidden ms-2">3 reviews</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                            <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="blur-up lazyload" data-src="assets/images/products/product2-120x170.jpg" src="assets/images/products/product2-120x170.jpg" alt="image" title="product" width="120" height="170" /></a></div>
                                                            <div class="ms-3 details text-left">
                                                                <div class="product-name"><a class="item-title" href="product-layout1.html">Cuff Beanie Cap</a></div>
                                                                <div class="product-price"><span class="price">$128.00</span></div>
                                                                <div class="product-review d-flex align-items-center justify-content-start">
                                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i>
                                                                    <span class="caption hidden ms-2">9 reviews</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="mini-list-item d-flex align-items-center w-100 clearfix">
                                                            <div class="mini-image text-center"><a class="item-link" href="product-layout1.html"><img class="blur-up lazyload" data-src="assets/images/products/product3-120x170.jpg" src="assets/images/products/product3-120x170.jpg" alt="image" title="product" width="120" height="170" /></a></div>
                                                            <div class="ms-3 details text-left">
                                                                <div class="product-name"><a class="item-title" href="product-layout1.html">Flannel Collar Shirt</a></div>
                                                                <div class="product-price"><span class="price">$99.00</span></div>
                                                                <div class="product-review d-flex align-items-center justify-content-start">
                                                                    <i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star"></i><i class="icon anm anm-star-o"></i>
                                                                    <span class="caption hidden ms-2">30 reviews</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--End Search products-->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Search-->
                        <!--Account-->
                        <div class="account-parent iconset">
                            <div class="account-link" title="Account"><i class="hdr-icon icon anm anm-user-al"></i></div>
                            <div id="accountBox">
                                <div class="customer-links">
                                    <ul class="m-0">
                                        <li><a href="login"><i class="icon anm anm-sign-in-al"></i>Sign In</a></li>
                                        <li><a href="signup"><i class="icon anm anm-user-al"></i>Register</a></li>
                                        <li><a href="account"><i class="icon anm anm-user-cil"></i>My Account</a></li>
                                        <li><a href="wishlist-style1.html"><i class="icon anm anm-heart-l"></i>Wishlist</a></li>
                                        <li><a href="compare-style1.html"><i class="icon anm anm-random-r"></i>Compare</a></li>
                                        <li><a href="<?php echo base_url('login/logout'); ?>"><i class="icon anm anm-sign-out-al"></i>Sign out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Account-->
                        <!--Wishlist-->
                        <div class="wishlist-link iconset" title="Wishlist"><a href="wishlist-style1.html"><i class="hdr-icon icon anm anm-heart-l"></i><span class="wishlist-count">0</span></a></div>
                        <!--End Wishlist-->
                        <!--Minicart-->
                        <div class="header-cart iconset" title="Cart">
                            <a href="#;" class="header-cart btn-minicart clr-none" data-bs-toggle="offcanvas" data-bs-target="#minicart-drawer"><i class="hdr-icon icon anm anm-cart-l"></i><span class="cart-count">2</span></a>
                        </div>
                        <!--End Minicart-->
                        <!--Mobile Toggle-->
                        <button type="button" class="iconset pe-0 menu-icon js-mobile-nav-toggle mobile-nav--open d-lg-none" title="Menu"><i class="hdr-icon icon anm anm-times-l"></i><i class="hdr-icon icon anm anm-bars-r"></i></button>
                        <!--End Mobile Toggle-->
                    </div>
                    <!--End Right Icon-->
                </div>
            </div>
        </header>
        <!--End Header-->