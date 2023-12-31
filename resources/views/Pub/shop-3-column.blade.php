<!DOCTYPE html>
<html lang="zxx" dir="ltr">

@include('Pub.layouts.headerSettings')

<body>
<div class="main-wrapper">
    @include('Pub.layouts.header')
    <!-- offcanvas overlay start -->
    <div class="offcanvas-overlay"></div>
    <!-- offcanvas overlay end -->
    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.blade.php" class="image"><img src="assets/images/product-image/1.webp"
                                                                              alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.blade.php" class="title">Modern Smart Phone</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.blade.php" class="image"><img src="assets/images/product-image/2.webp"
                                                                              alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.blade.php" class="title">Bluetooth Headphone</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.blade.php" class="image"><img src="assets/images/product-image/3.webp"
                                                                              alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.blade.php" class="title">Smart Music Box</a>
                            <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist.blade.php" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.blade.php" class="image"><img src="assets/images/product-image/1.webp"
                                                                              alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.blade.php" class="title">Modern Smart Phone</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.blade.php" class="image"><img src="assets/images/product-image/2.webp"
                                                                              alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.blade.php" class="title">Bluetooth Headphone</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.blade.php" class="image"><img src="assets/images/product-image/3.webp"
                                                                              alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.blade.php" class="title">Smart Music Box</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart.blade.php" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.blade.php" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->
    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <div class="user-panel">
            <ul>
                <li><a href="tel:0123456789"><i class="fa fa-phone"></i> +012 3456 789</a></li>
                <li><a href="mailto:demo@example.com"><i class="fa fa-envelope-o"></i> demo@example.com</a></li>
                <li><a href="my-account.blade.php"><i class="fa fa-user"></i> Account</a></li>
            </ul>
        </div>
        <div class="inner customScroll">
            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.blade.php"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.blade.php"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about.blade.php">About</a></li>
                    <li>
                        <a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Inner Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404.blade.php">404 Page</a></li>
                                    <li><a href="order-tracking.blade.php">Order Tracking</a></li>
                                    <li><a href="faq.blade.php">Faq Page</a></li>
                                    <li><a href="coming-soon.blade.php">Coming Soon Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text"> Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.blade.php">Cart Page</a></li>
                                    <li><a href="checkout.blade.php">Checkout Page</a></li>
                                    <li><a href="compare.blade.php">Compare Page</a></li>
                                    <li><a href="wishlist.blade.php">Wishlist Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Related Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="my-account.blade.php">Account Page</a></li>
                                    <li><a href="login.blade.php">Login & Register Page</a></li>
                                    <li><a href="empty-cart.blade.php">Empty Cart Page</a></li>
                                    <li><a href="thank-you-page.blade.php">Thank You Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.blade.php">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.blade.php">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.blade.php">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.blade.php">Shop List Left Sidebar</a>
                                    </li>
                                    <li><a href="shop-list-right-sidebar.blade.php">Shop List Right Sidebar</a>
                                    </li>
                                    <li><a href="cart.blade.php">Cart Page</a></li>
                                    <li><a href="checkout.blade.php">Checkout Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.blade.php">Product Single</a></li>
                                    <li><a href="single-product-variable.blade.php">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.blade.php">Product Affiliate</a></li>
                                    <li><a href="single-product-group.blade.php">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.blade.php">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.blade.php">Product Tab 3</a></li>
                                    <li><a href="single-product-slider.blade.php">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.blade.php">Product Gallery Left</a>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-gallery-right.blade.php">Product Gallery
                                            Right</a></li>
                                    <li><a href="single-product-sticky-left.blade.php">Product Sticky Left</a>
                                    </li>
                                    <li><a href="single-product-sticky-right.blade.php">Product Sticky Right</a>
                                    </li>
                                    <li><a href="compare.blade.php">Compare Page</a></li>
                                    <li><a href="wishlist.blade.php">Wishlist Page</a></li>
                                    <li><a href="my-account.blade.php">Account Page</a></li>
                                    <li><a href="login.blade.php">Login & Register Page</a></li>
                                    <li><a href="empty-cart.blade.php">Empty Cart Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid.blade.php">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar.blade.php">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar.blade.php">Grid Right Sidebar</a></li>
                            <li><a href="blog-list.blade.php">Blog List Page</a></li>
                            <li><a href="blog-list-left-sidebar.blade.php">List Left Sidebar</a></li>
                            <li><a href="blog-list-right-sidebar.blade.php">List Right Sidebar</a></li>
                            <li><a href="blog-single.blade.php">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar.blade.php">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar.blade.php">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="contact.blade.php">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Product Page</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- Shop Page Start  -->
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        @if(session()->exists('filter'))
                            <a href="{{route('products.dropFilter')}}">
                                <button type="button" class="btn btn-primary">Drop Filter</button>
                            </a>
                        @endif
                        <p class="compare-product"><span>{{$products->total()}}</span> Product Found of
                            <span>{{\App\Models\Product::all()->count()}}</span></p>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </button>
                            <button data-bs-target="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </button>
                        </div>

                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <!-- Single Wedge End -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Default <i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                    <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                    <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                    <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By new</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By old</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge Start -->
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @foreach($products as $product)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                        <span class="new">New</span>
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="{{route('products.show', ['id' => $product->id])}}"
                                                               class="image">
                                                                <img src="{{$product->preview_image}}" alt="Product"/>
                                                                <img class="hover-image"
                                                                     src="{{$product->preview_image}}" alt="Product"/>
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a
                                                                    href="{{route('products.show', ['id' => $product->id])}}">{{$product->sub_category->title}}</a></span>
                                                            <h5 class="title"><a
                                                                    href="{{route('products.show', ['id' => $product->id])}}">{{$product->title}}
                                                                </a>
                                                            </h5>
                                                            <span class="price">
                                                            <span class="new">${{$product->price}}</span>
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            @if(\Illuminate\Support\Facades\Auth::user())
                                                                <a href="{{route('cart.add', ['product' => $product->id])}}">
                                                                    <button title="Add To Cart"
                                                                            class="action add-to-cart"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal-Cart"><i
                                                                            class="pe-7s-shopbag"></i></button>
                                                                </a>
                                                            @endif

                                                            <a href="{{route('wishlist.add', ['id' => $product->id])}}">
                                                                <button class="action wishlist" title="Wishlist"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModal-Wishlist"><i
                                                                        class="pe-7s-like"></i></button>
                                                            </a>
                                                            <button class="action quickview"
                                                                    data-link-action="quickview" title="Quick view"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal"><i
                                                                    class="pe-7s-look"></i></button>
                                                            <button class="action compare" title="Compare"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal-Compare"><i
                                                                    class="pe-7s-refresh-2"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up"
                             data-aos-delay="200">
                            <div class="pages">
                                <ul>
                                    <li class="li">
                                        <a class="page-link" href="{{ $products->previousPageUrl() }}">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                    </li>

                                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                        <li class="li">
                                            <a class="page-link{{ $page == $products->currentPage() ? ' active' : '' }}"
                                               href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    <li class="li">
                                        <a class="page-link" href="{{ $products->nextPageUrl() }}">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Page End  -->
    @include('Pub.layouts.footer')
</div>
<!-- Modal -->
<div class="modal modal-2 fade" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="pe-7s-close"></i></button>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/1.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/2.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/3.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/4.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/zoom-image/5.webp" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/1.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/2.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/3.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/4.webp" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto"
                                         src="assets/images/product-image/small-image/5.webp" alt="">
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                        <div class="product-details-content quickview-content">
                            <h2>Modern Smart Phone</h2>
                            <div class="pricing-meta">
                                <ul class="d-flex">
                                    <li class="new-price">$20.90</li>
                                </ul>
                            </div>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">( 2 Review )</a></span>
                            </div>
                            <p class="mt-30px">Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmll
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mill veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip exet commodo consequat. Duis aute irure
                                dolor</p>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>SKU:</span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Ch-256xl</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Categories: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Smart Device, </a>
                                    </li>
                                    <li>
                                        <a href="#">ETC</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                <span>Tags: </span>
                                <ul class="d-flex">
                                    <li>
                                        <a href="#">Smart Device, </a>
                                    </li>
                                    <li>
                                        <a href="#">Phone</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1"/>
                                </div>
                                <div class="pro-details-cart">
                                    <button class="add-cart"> Add To
                                        Cart
                                    </button>
                                </div>
                                <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                    <a href="wishlist.blade.php"><i class="pe-7s-like"></i></a>
                                </div>
                            </div>
                            <div class="payment-img">
                                <a href="#"><img src="assets/images/icons/payment.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<!-- Modal Cart -->
<div class="modal customize-class fade" id="exampleModal-Cart" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="pe-7s-close"></i></button>
                <div class="tt-modal-messages">
                    <i class="pe-7s-check"></i> Added to cart successfully!
                </div>
                <div class="tt-modal-product">
                    <div class="tt-img">
                        <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                    </div>
                    <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal wishlist -->
<div class="modal customize-class fade" id="exampleModal-Wishlist" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="pe-7s-close"></i></button>
                <div class="tt-modal-messages">
                    <i class="pe-7s-check"></i> Added to Wishlist successfully!
                </div>
                <div class="tt-modal-product">
                    <div class="tt-img">
                        <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                    </div>
                    <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal compare -->
<div class="modal customize-class fade" id="exampleModal-Compare" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="pe-7s-close"></i></button>
                <div class="tt-modal-messages">
                    <i class="pe-7s-check"></i> Added to compare successfully!
                </div>
                <div class="tt-modal-product">
                    <div class="tt-img">
                        <img src="assets/images/product-image/1.webp" alt="Modern Smart Phone">
                    </div>
                    <h2 class="tt-title"><a href="#">Modern Smart Phone</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Global Vendor, plugins JS -->
<!-- JS Files
============================================ -->
@include('Pub.layouts.footerSettings')
</body>

</html>
