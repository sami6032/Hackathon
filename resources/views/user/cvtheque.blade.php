@extends('layouts.app')
   
@section('content')
<div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Chercher le profil qui correspond a votre entreprise</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('accueil') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('cvtheque') }}">cvthèque</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->
    <!-- blog section start here -->
    <div class="shop-page padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <article>
                        <div class="shop-title d-flex flex-wrap justify-content-between">
                            <p>Les apprenants dclic</p>
                            <div class="product-view-mode">
                                <a class="active" data-target="grid"><i class="icofont-ghost"></i></a>
                                <a data-target="list"><i class="icofont-listine-dots"></i></a>
                            </div>
                        </div>
                        <div class="shop-product-wrap grid row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/05.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p>
                                            <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                        </p>
                                        <h6><a href="http://">Télecharger</a></h6>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/05.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p>
                                            <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                        </p>
                                        <h6>
                                        <h6><a href="http://">Télecharger</a></h6>
                                        </h6>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/06.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p>
                                            <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                        </p>
                                        <h6><a href="http://">Télecharger</a></h6>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/06.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p>
                                            <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                        </p>
                                        <h6><a href="http://">Télecharger</a></h6>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/07.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p>
                                            <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                        </p>
                                        <h6><a href="http://">Télecharger</a></h6>
                                    </div>
                                </div>
                                <div class="product-list-item">
                                    <div class="product-thumb">
                                        <div class="pro-thumb">
                                            <img src="assets/images/shop/07.jpg" alt="shop">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h5><a href="#">Product Title Here</a></h5>
                                        <p>
                                            <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                        </p>
                                        <h6><a href="http://">Télecharger</a></h6>

                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-list-item">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="product-list-item">
                                </div>
                            </div>
                        </div>
                        <ul class="default-pagination lab-ul">
                            <li>
                                <a href="#"><i class="icofont-rounded-left"></i></a>
                            </li>
                            <li>
                                <a href="#">01</a>
                            </li>
                            <li>
                                <a href="#" class="active">02</a>
                            </li>
                            <li>
                                <a href="#">03</a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-rounded-right"></i></a>
                            </li>
                        </ul>
                    </article>
                </div>
                <div class="col-lg-4 col-12">
                    <aside>
                        <div class="widget widget-search">
                            <form action="/" class="search-wrapper">
                                <input type="text" name="s" placeholder="Search...">
                                <button type="submit"><i class="icofont-search-2"></i></button>
                            </form>
                        </div>
                        <div class="widget shop-widget">
                            <div class="widget-header">
                                <h5>Les profiles</h5>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="shop-menu lab-ul">
                                    <li>
                                        <a href="#0">Web développer</a>
                                    </li>
                                    <li><a href="#0">Applications mobiles</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-post">
                        </div>
                    </aside>
                </div>
            </div>
            <div class="modal" id="quick_view">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal"><i class="icofont-close"></i></button>
                        <div class="modal-body">
                            <div class="product-details-inner">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 col-12">
                                        <div class="thumb text-center">
                                            <div class="pro-thumb">
                                                <img src="assets/images/shop/09.jpg" alt="shop">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="product-content">
                                            <h5><a href="#">Product Title Here</a></h5>
                                            <p>
                                                <i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i>
                                            </p>
                                            <h6>$200</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                        </div>
                                        <div class="cart-button">
                                            <div class="cart-plus-minus">
                                                <div class="dec qtybutton">-</div>
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                            <a href="#" class="lab-btn"><span>Add to Cart</span></a>
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
    <!-- blog section ending here -->


    <!-- footer -->
    <div class="news-footer-wrap">

   
   @endsection