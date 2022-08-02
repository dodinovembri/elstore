<!doctype html>
<html lang="en">

<head>
    <!--Required Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="description">
    <!-- Title Of Site -->
    <title>L Store - HP & Accessories</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body class="category-page category-2columns">
    <!-- Page Loader -->
    <div id="pre-loader"><img src="assets/images/loader.gif" alt="Loading..." /></div>
    <!-- End Page Loader -->

    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Header-->
        <div id="header" class="header">
            <div class="header-main">
                <header class="header-wrap container d-flex align-items-center">
                    <div class="row g-0 align-items-center w-100">
                        <!--Social Icons-->
                        <div class="col-4 col-sm-4 col-md-4 col-lg-5 d-none d-lg-block">
                            <ul class="social-icons list-inline">
                                <li class="list-inline-item"><a href="#"><i class="an an-whatsapp" aria-hidden="true"></i><span class="tooltip-label">Whatsapp</span></a></li>
                            </ul>
                        </div>
                        <!--End Social Icons-->
                        <!--Logo / Menu Toggle-->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-flex">
                            <!--Mobile Toggle-->
                            <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open me-3 d-lg-none"><i class="icon an an-times-l"></i><i class="icon an an-bars-l"></i></button>
                            <!--End Mobile Toggle-->
                            <!--Logo-->
                            <div class="logo mx-lg-auto"><a href="index.html"><img class="logo-img" src="assets/images/logo.svg" alt="Optimal Multipurpose eCommerce Bootstrap 5 Html Template" title="L Store" /><span class="logo-txt d-none">L Store</span></a></div>
                            <!--End Logo-->
                        </div>
                        <!--End Logo / Menu Toggle-->
                        <!--Right Action-->
                        <div class="col-6 col-sm-6 col-md-6 col-lg-5 icons-col text-right d-flex justify-content-end">
                            <!--Search-->
                            <div class="site-search iconset"><i class="icon an an-search-l"></i><span class="tooltip-label">Search</span></div>
                            <!--End Search-->

                        </div>
                        <!--End Right Action-->
                    </div>
                </header>
                <!--Main Navigation Desktop-->
                <div class="menu-outer">
                    <nav class="container">
                        <div class="row">
                            <div class="col-1 col-sm-12 col-md-12 col-lg-12 align-self-center d-menu-col">
                                <!--Desktop Menu-->
                                <nav class="grid__item" id="AccessibleNav">
                                    <ul id="siteNav" class="site-nav medium center hidearrow">
                                        <li class="lvl1 parent megamenu"><a href="#;">Home <i class="an an-angle-down-l"></i></a>
                                        </li>
                                        <li class="lvl1 parent megamenu"><a href="#;">Kategori Produk <i class="an an-angle-down-l"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <!--End Desktop Menu-->
                            </div>
                        </div>
                    </nav>
                </div>
                <!--End Main Navigation Desktop-->
                <!--Search Popup-->
                <div id="search-popup" class="search-drawer">
                    <div class="container">
                        <span class="closeSearch an an-times-l"></span>
                        <form class="form minisearch" id="header-search" action="#" method="get">
                            <label class="label"><span>Search</span></label>
                            <div class="control">
                                <div class="searchField">
                                    <div class="search-category">
                                        <select id="rgsearch-category" name="rgsearch[category]" data-default="All Categories">
                                            <option value="00" label="All Categories" selected="selected">All Categories</option>
                                            <optgroup id="rgsearch-shop" label="Shop">
                                                <option value="0">- All</option>
                                                <option value="1">- Men</option>
                                                <option value="2">- Women</option>
                                                <option value="3">- Shoes</option>
                                                <option value="4">- Blouses</option>
                                                <option value="5">- Pullovers</option>
                                                <option value="6">- Bags</option>
                                                <option value="7">- Accessories</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="input-box">
                                        <button type="submit" title="Search" class="action search" disabled=""><i class="icon an an-search-l"></i></button>
                                        <input type="text" name="q" value="" placeholder="Search by keyword or #" class="input-text">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Search Popup-->
            </div>
        </div>
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon an an-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="index.html">Home</a>
                </li>
                <li class="lvl1 parent megamenu"><a href="#">Kategori Produk</a>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->

        <!--Body Container-->
        <div id="page-content">
            <!--Collection Banner-->
            <div class="collection-header">
                <div class="collection-hero">
                    <div class="collection-hero__image"></div>
                    <div class="collection-hero__title-wrapper container">
                        <h1 class="collection-hero__title">Kategori Produk</h1>
                    </div>
                </div>
                <!--End Collection Banner-->

                <!--Category Grid-->
                <div class="container">
                    <!--Category Masonary Grid-->
                    <div class="grid-categorys grid-mr-20">
                        <div class="grid-masonary category-page-grid style1">
                            <div class="grid-sizer col-6 col-sm-6 col-md-6 col-lg-6"></div>
                            <div class="row mx-0">
                                <?php
                                $data = "data/category.json";
                                $data_category = file_get_contents($data);
                                $categories = json_decode($data_category, true);
                                ?>
                                <?php
                                foreach ($categories as $key => $value) { ?>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 category-grid-item cl-item">
                                        <div class="category-item position-relative overflow-hidden zoomscal-hov">
                                            <a href="shop-left-sidebar.html" class="category-link">
                                                <div class="zoom-scal"><img class="blur-up lazyload" data-src="assets/images/collection/<?php echo $value['image']; ?>" src="assets/images/collection/<?php echo $value['image']; ?>" alt="collection" title="" /></div>
                                                <div class="details">
                                                    <div class="inner">
                                                        <h3 class="category-title"><?php echo $value['name']; ?></h3>
                                                        <span class="counts mt-0 mt-md-1"><?php echo $value['total_product']; ?> Products</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!--End Category Masonary Grid-->
                </div>
                <!--End Category Grid-->
            </div>
            <!--End Body Container-->

            <!--Footer-->
            <div class="footer footer-1">
                <div class="footer-top clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                                <p>Jalan Solok - Muaro Labuah, Muaro Danau Di Atas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom clearfix">
                    <div class="container">
                        <div class="d-flex-center flex-column justify-content-md-between flex-md-row-reverse">
                            <div class="copytext text">&copy; 2022 Optimal. All Rights Reserved.</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Footer-->

            <!--Scoll Top-->
            <span id="site-scroll"><i class="icon an an-chevron-up"></i></span>
            <!--End Scoll Top-->

            <!-- Including Jquery -->
            <script src="assets/js/vendor/jquery-min.js"></script>
            <script src="assets/js/vendor/js.cookie.js"></script>
            <!--Including Javascript-->
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/main.js"></script>

        </div>
        <!--End Page Wrapper-->
</body>

</html>