<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="images/favicon.png">
    
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Page Template</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">
    <!-- Top Bar
        ============================================= -->
    <div id="top-bar" class="dark">

        <div class="container clearfix">

            <div class="col_half nobottommargin">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

            <div class="col_half fright col_last nobottommargin">

                <!-- Top Social
                ============================================= -->
                <div id="top-social">
                    <ul>
                        <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                        <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
                        <li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
                        <li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
                        <li><a href="mailto:info@email.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">info@email.com</span></a></li>
                    </ul>
                </div><!-- #top-social end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2">

        <div class="container clearfix">

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png">Udemy</a>
            </div><!-- #logo end -->

            <div class="top-advert">
                <img src="images/magazine/ad.jpg" alt="Ad">
            </div>

        </div>

        <div id="header-wrap">

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="style-2">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <?php

                    if ( has_nav_menu('primary') ) {
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'fallback_cb'    => false,
                            'depth'          => 4
                        ));
                    }

                    ?>

                    <!-- Top Cart
                        ============================================= -->
                    <div id="top-cart">
                        <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Blue Round-Neck Tshirt</a>
                                        <span class="top-cart-item-price">$19.99</span>
                                        <span class="top-cart-item-quantity">x 2</span>
                                    </div>
                                </div>
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Light Blue Denim Dress</a>
                                        <span class="top-cart-item-price">$24.99</span>
                                        <span class="top-cart-item-quantity">x 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action clearfix">
                                <span class="fleft top-checkout-price">$114.95</span>
                                <button class="button button-3d button-small nomargin fright">View Cart</button>
                            </div>
                        </div>
                    </div><!-- #top-cart end -->

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div><!-- #top-search end -->

                </div>

            </nav><!-- #primary-menu end -->

        </div>

    </header><!-- #header end -->

    <!-- Page Title
============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Page Title</h1>
            <span>Page Subtitle</span>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                  ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.</p>
                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.</p>
                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.</p>
                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.</p>
                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.</p>
                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.</p>

                </div><!-- .postcontent end -->

                <!-- Sidebar
                    ============================================= -->
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">
                        <div class="widget clearfix">

                            <h4>Recipes of the Day</h4>
                            <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

                                <div class="oc-item">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="widget clearfix">

                            <h4>Tag Cloud</h4>
                            <div class="tagcloud">
                                <a href="#">general</a>
                                <a href="#">videos</a>
                                <a href="#">music</a>
                                <a href="#">media</a>
                                <a href="#">photography</a>
                                <a href="#">parallax</a>
                                <a href="#">ecommerce</a>
                                <a href="#">terms</a>
                                <a href="#">coupons</a>
                                <a href="#">modern</a>
                            </div>

                        </div>

                    </div>

                </div><!-- .sidebar end -->

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <!-- Copyrights
           ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2017 All Rights Reserved by Jasko Koyn Inc.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> info@email.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<?php wp_footer(); ?>
</body>
</html>