<header>
    <!-- Header top area start -->
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="welcome-text">
                        <p>World Wide Completely Free Returns and Shipping</p>
                    </div>
                </div>
                <div class="col d-none d-lg-block">
                    <div class="top-nav">
                        @if(\Illuminate\Support\Facades\Auth::user())
                            <ul>
                                <li><a href="mailto:demo@example.com"><i
                                            class="fa fa-envelope-o"></i>{{\Illuminate\Support\Facades\Auth::user()->email}}
                                    </a></li>
                                <li><a href="my-account.blade.php"><i
                                            class="fa fa-user"></i> {{\Illuminate\Support\Facades\Auth::user()->name}}
                                    </a></li>
                                <li>
                                    <button><a href="{{route('logout')}}">Logout</a></button>
                                </li>
                            </ul>
                        @endif
                        @if(!\Illuminate\Support\Facades\Auth::user())
                            <ul>
                                <li>
                                    <button><a href="{{route('auth')}}">Login</a></button>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header top area end -->
    <!-- Header action area start -->
    <div class="header-bottom  d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col">
                    <div class="header-logo">
                        <a href="index.blade.html"><img src="assets/images/logo/logo.png" alt="Site Logo"/></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="search-element">
                        <form action="{{route('products.filter')}}" method="post">
                            @method('POST')
                            @csrf
                            <input name="filter" value="{{old('filter')}}" type="text" placeholder="Search"/>
                            <button type="submit"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col">
                    <div class="header-actions">
                        <!-- Single Wedge Start -->
                        <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                            <i class="pe-7s-like"></i>
                        </a>
                        <!-- Single Wedge End -->
                        @auth()
                            @php($products = \App\Facades\CartService::getUserCart())
                            <a href="#offcanvas-cart"
                               class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="pe-7s-shopbag"></i>
                                <span class="header-action-num">{{count($products)}}</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                        @endauth()
                        <a href="#offcanvas-mobile-menu"
                           class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="pe-7s-menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header action area end -->
    <!-- Header action area start -->
    <div class="header-bottom d-lg-none sticky-nav style-1">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col">
                    <div class="header-logo">
                        <a href="index.blade.html"><img src="assets/images/logo/logo.png" alt="Site Logo"/></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="search-element">
                        <form action="#">
                            <input type="text" placeholder="Search"/>
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col">
                    <div class="header-actions">
                        <!-- Single Wedge Start -->
                        <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                            <i class="pe-7s-like"></i>
                        </a>
                        <!-- Single Wedge End -->
                        <a href="#offcanvas-cart"
                           class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                            <i class="pe-7s-shopbag"></i>
                            <span class="header-action-num">01</span>
                            <!-- <span class="cart-amount">€30.00</span> -->
                        </a>
                        <a href="#offcanvas-mobile-menu"
                           class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                            <i class="pe-7s-menu"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header action area end -->
    <!-- header navigation area start -->
    <div class="header-nav-area d-none d-lg-block sticky-nav">
        <div class="container">
            <div class="header-nav">
                <div class="main-menu position-relative">
                    <ul>
                        <li class="dropdown"><a href="#">Home <i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="index.blade.html">Home 7</a></li>
                                <li><a href="{{route('download')}}">Download Ronaldo</a></li>
                            </ul>
                        </li>
                        <li><a href="about.blade.php">About</a></li>
                        <li class="dropdown position-static"><a href="about.blade.php">Pages <i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="mega-menu d-block">
                                <li class="d-flex">
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Inner Pages</a></li>
                                        <li><a href="404.blade.php">404 Page</a></li>
                                        <li><a href="order-tracking.blade.php">Order Tracking</a></li>
                                        <li><a href="faq.blade.php">Faq Page</a></li>
                                        <li><a href="coming-soon.blade.php">Coming Soon Page</a></li>
                                    </ul>
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Other Shop Pages</a></li>
                                        @auth()
                                            <li><a href="{{route('cart.index')}}">Cart Page</a></li>
                                            <li><a href="{{route('checkout.index')}}">Checkout Page</a></li>
                                        @endauth
                                        <li><a href="compare.blade.php">Compare Page</a></li>
                                        <li><a href="{{route('wishlist.index')}}">Wishlist Page</a></li>
                                    </ul>
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Related Shop Pages</a></li>
                                        @auth()
                                        <li><a href="{{route('pub.user.index')}}">Account Page</a></li>
                                        @endauth
                                        <li><a href="login.blade.php">Login & Register Page</a></li>
                                        <li><a href="empty-cart.blade.php">Empty Cart Page</a></li>
                                        <li><a href="thank-you-page.blade.php">Thank You Page</a></li>
                                    </ul>
                                    <ul class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                        <li>
                                            <a class="p-0" href="shop-left-sidebar.blade.php"><img
                                                    class="img-responsive w-100"
                                                    src="assets/images/banner/menu-banner.png" alt=""></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown position-static"><a href="#">Shop <i
                                    class="fa fa-angle-down"></i></a>
                            <ul class="mega-menu d-block">
                                <li class="d-flex">
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Shop Page</a></li>
                                        <li><a href="{{route('products.index')}}">Products</a></li>
                                        <li><a href="shop-left-sidebar.blade.php">Shop Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.blade.php">Shop Right Sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.blade.php">Shop List Left Sidebar</a>
                                        </li>
                                        <li><a href="shop-list-right-sidebar.blade.php">Shop List Right Sidebar</a>
                                        </li>
                                    </ul>
                                    <ul class="d-block">
                                        <li class="title"><a href="#">product Details Page</a></li>
                                        <li><a href="single-product.blade.php">Product Single</a></li>
                                        <li><a href="single-product-variable.blade.php">Product Variable</a></li>
                                        <li><a href="single-product-affiliate.blade.php">Product Affiliate</a></li>
                                        <li><a href="single-product-group.blade.php">Product Group</a></li>
                                        <li><a href="single-product-tabstyle-2.blade.php">Product Tab 2</a></li>
                                        <li><a href="single-product-tabstyle-3.blade.php">Product Tab 3</a></li>
                                    </ul>
                                    <ul class="d-block">
                                        <li class="title"><a href="#">Single Product Page</a></li>
                                        <li><a href="single-product-slider.blade.php">Product Slider</a></li>
                                        <li><a href="single-product-gallery-left.blade.php">Product Gallery Left</a>
                                        <li><a href="single-product-gallery-right.blade.php">Product Gallery Right</a>
                                        </li>
                                        <li><a href="single-product-sticky-left.blade.php">Product Sticky Left</a>
                                        </li>
                                        <li><a href="single-product-sticky-right.blade.php">Product Sticky Right</a>
                                        </li>
                                        <li><a href="cart.blade.php">Cart Page</a></li>
                                    </ul>
                                    <ul class="d-block p-0 border-0">
                                        <li class="title"><a href="#">Single Product Page</a></li>
                                        <li><a href="checkout.blade.php">Checkout Page</a></li>
                                        <li><a href="compare.blade.php">Compare Page</a></li>
                                        <li><a href="wishlist.blade.php">Wishlist Page</a></li>
                                        <li><a href="my-account.blade.php">Account Page</a></li>
                                        <li><a href="login.blade.php">Login & Register Page</a></li>
                                        <li><a href="empty-cart.blade.php">Empty Cart Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown "><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li class="dropdown position-static"><a href="blog-grid-left-sidebar.blade.php">Blog
                                        Grid
                                        <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu sub-menu-2">
                                        <li><a href="blog-grid.blade.php">Blog Grid</a></li>
                                        <li><a href="blog-grid-left-sidebar.blade.php">Blog Grid Left Sidebar</a></li>
                                        <li><a href="blog-grid-right-sidebar.blade.php">Blog Grid Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="blog-list-left-sidebar.blade.php">Blog
                                        List
                                        <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu sub-menu-2">
                                        <li><a href="blog-list.blade.php">Blog List</a></li>
                                        <li><a href="blog-list-left-sidebar.blade.php">Blog List Left Sidebar</a></li>
                                        <li><a href="blog-list-right-sidebar.blade.php">Blog List Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="blog-single-left-sidebar.blade.php">Single
                                        Blog <i class="fa fa-angle-right"></i></a>
                                    <ul class="sub-menu sub-menu-2">
                                        <li><a href="blog-single.blade.php">Single Blog</a>
                                        <li><a href="blog-single-left-sidebar.blade.php">Single Blog Left Sidebar</a>
                                        </li>
                                        <li><a href="blog-single-right-sidebar.blade.php">Single Blog Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.blade.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header navigation area end -->
    <div class="mobile-search-box d-lg-none">
        <div class="container">
            <!-- mobile search start -->
            <div class="search-element max-width-100">
                <form action="#">
                    <input type="text" placeholder="Search"/>
                    <button><i class="pe-7s-search"></i></button>
                </form>
            </div>
            <!-- mobile search start -->
        </div>
    </div>
</header>

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

@auth()
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">

                <ul class="minicart-product-list">
                    @foreach($products as $product)
                        <li>
                            <a href="{{route('products.show', ['id' => $product->id])}}" class="image"><img
                                    src="{{$product->preview_image}}"
                                    alt="Cart product Image"></a>
                            <div class="content">
                                <a href="single-product.blade.php" class="title">{{$product->title}}</a>
                                <span class="quantity-price">1 x <span class="amount">${{$product->price}}</span></span>
                                <a href="#" class="remove">×</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart.blade.php" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="{{route('cart.index')}}" class="btn btn-outline-dark current-btn">Cart</a>
                </div>
            </div>
        </div>
    </div>
@endauth

@include('Pub.layouts.alerts')
