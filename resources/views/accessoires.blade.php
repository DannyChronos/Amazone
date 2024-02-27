@extends('layout.app')

@section('content')
    <!-- /banner_bottom_agile_info -->
    <div class="page-head_agile_info_w3l">
        <div class="container">
            <h3>Access<span>oires </span></h3>
            <!--/w3_short-->
            <div class="services-breadcrumb">
                <div class="agile_inner_breadcrumb">

                    <ul class="w3_short">
                        <li><a href="index.html">Accueil</a><i>|</i></li>
                        <li>Accessoires</li>
                    </ul>
                </div>
            </div>
            <!--//w3_short-->
        </div>
    </div>
    <!---728x90--->

    <!-- banner-bootom-w3-agileits -->
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <!-- mens -->

            <div class="col-md-12 products-right">
                <div class="men-wear-top">
                    <div id="top" class="callbacks_container">
                        <ul class="rslides" id="slider3">
                            <li>
                                <img class="img-responsive" src="images/banner4.jpg" alt=" " />
                            </li>
                            <li>
                                <img class="img-responsive" src="images/banner3.jpg" alt=" " />
                            </li>
                            <li>
                                <img class="img-responsive" src="images/banner1.jpg" alt=" " />
                            </li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

            <div class="single-pro">
                @foreach ($accessoireAll as $accessoire)
                    <div class="col-md-3 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{ asset('storage/' . $accessoire->nom_image) }}" alt="" class="pro-image-front">
                                <img src="{{ asset('storage/' . $accessoire->nom_image) }}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="{{ $accessoire->lien }}" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="{{ $accessoire->lien }}">{{ $accessoire->nom }}</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$45.99</span>
                                    <del>$69.71</del>
                                </div>
                                <div
                                    class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">

                                    <a href="{{ $accessoire->lien }}" style="color: white; font-weight:bold" class="button">
                                        Acheter </a>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //mens -->
    <!---728x90--->
    <!--/grids-->
    <div class="coupons">
        <div class="coupons-grids text-center">
            <div class="w3layouts_mail_grid">
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE SHIPPING</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-headphones" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>24/7 SUPPORT</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>MONEY BACK GUARANTEE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="col-md-3 w3layouts_mail_grid_left">
                    <div class="w3layouts_mail_grid_left1 hvr-radial-out">
                        <i class="fa fa-gift" aria-hidden="true"></i>
                    </div>
                    <div class="w3layouts_mail_grid_left2">
                        <h3>FREE GIFT COUPONS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!--grids-->
    <!---728x90--->
@endsection
