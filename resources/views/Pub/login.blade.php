<!DOCTYPE html>
<html lang="zxx" dir="ltr">

@include('Pub.layouts.headerSettings')

<body>
<div class="main-wrapper">
    @include('Pub.layouts.header')

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
                                    <li><a href="login.html">Login & Register Page</a></li>
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
                                    <li><a href="shop-3-column.blade.php">Shop 3 Column</a></li>
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
                                    <li><a href="login.html">Login & Register Page</a></li>
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
                    <h2 class="breadcrumb-title">Login</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                        <li class="breadcrumb-item active">Login</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- login area start -->
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4>login</h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4>register</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <a class="btn-danger" href={{route('socialite')}}>
                                            <button>Go with Google</button>
                                        </a>
                                        <form action="{{route('login')}}" method="post">
                                            @method('POST')
                                            @csrf
                                            <input type="text" name="email" placeholder="Username"/>
                                            <input type="password" name="password" placeholder="Password"/>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox"/>
                                                    <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit"><span>Loginss</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <a class="btn-danger" href={{route('socialite')}}>
                                            <button>Go with Google</button>
                                        </a>
                                        <form action="{{route('register')}}" method="post">
                                            @method('POST')
                                            @csrf
                                            <input type="text" name="name" placeholder="Username"/>
                                            <input type="password" name="password" placeholder="Password"/>
                                            <input name="email" placeholder="Email" type="email"/>
                                            <input type="number" name="age" placeholder="Age">
                                            <input type="text" name="address" placeholder="Address">

                                            <select name="gender"
                                                    class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;"
                                                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option selected="selected" disabled>Choose your gender</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                            <br>

                                            <div class="button-box">
                                                <button type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->
    @include('Pub.layouts.footer')
</div>
<!-- Global Vendor, plugins JS -->
<!-- JS Files
============================================ -->
@include('Pub.layouts.footerSettings')
</body>

</html>
