<!DOCTYPE html>
<html lang="zxx" dir="ltr">

@include('Pub.layouts.headerSettings')

<body>
<div class="main-wrapper">
    @include('Pub.layouts.header')
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
                                    <li><a href="checkout.html">Checkout Page</a></li>
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
                                    <li><a href="shop-3-column.blade.php">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.blade.php">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.blade.php">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.blade.php">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar.blade.php">Shop List Left Sidebar</a>
                                    </li>
                                    <li><a href="shop-list-right-sidebar.blade.php">Shop List Right Sidebar</a>
                                    </li>
                                    <li><a href="cart.blade.php">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
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
                    <h2 class="breadcrumb-title">Checkout</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- breadcrumb-area end -->
    <!-- checkout area start -->
    <form action="{{route('checkout.store')}}" method="post">
        @method('POST')
        @csrf
        <div class="checkout-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="billing-info-wrap">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>First Name</label>
                                        <input name="firstname" type="text"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Last Name</label>
                                        <input name="lastname" type="text"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>Company Name(optional)</label>
                                        <input name="company" type="text"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-4">
                                        <label>Country</label>
                                        <select name="country">
                                            <option disabled selected>Select a country</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->name}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>Street Address</label>
                                        <input name="address" class="billing-address" placeholder="House number and street name"
                                               type="text"/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-4">
                                        <label>Town / City</label>
                                        <input name="city" type="text"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Phone</label>
                                        <input name="phone" type="text"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-4">
                                        <label>Email Address</label>
                                        <input name="email" type="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-account mb-30px">
                                <input class="checkout-toggle2 w-auto h-auto" type="checkbox"/>
                                <label>Create an account?</label>
                            </div>
                            <div class="checkout-account-toggle open-toggle2 mb-30">
                                <input placeholder="Email address" type="email"/>
                                <input placeholder="Password" type="password"/>
                                <button class="btn-hover checkout-btn" type="submit">register</button>
                            </div>
                            <div class="additional-info-wrap">
                                <h4>Additional information</h4>
                                <div class="additional-info">
                                    <label>Order notes</label>
                                    <input name="additional_information" placeholder="Notes about your order, e.g. special notes for delivery. " style="height: 90px">
                                </div>
                            </div>
                            <div class="checkout-account mt-25">
                                <input class="checkout-toggle w-auto h-auto" type="checkbox"/>
                                <label>Ship to a different address?</label>
                            </div>


                            <div class="different-address open-toggle mt-30px">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>First Name</label>
                                            <input type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>Last Name</label>
                                            <input type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-4">
                                            <label>Company Name</label>
                                            <input type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-select mb-4">
                                            <label>Country</label>
                                            <select>
                                                <option>Select a country</option>
                                                <option>Azerbaijan</option>
                                                <option>Bahamas</option>
                                                <option>Bahrain</option>
                                                <option>Bangladesh</option>
                                                <option>Barbados</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-4">
                                            <label>Street Address</label>
                                            <input class="billing-address" placeholder="House number and street name"
                                                   type="text"/>
                                            <input placeholder="Apartment, suite, unit etc." type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="billing-info mb-4">
                                            <label>Town / City</label>
                                            <input type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>State / County</label>
                                            <input type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>Postcode / ZIP</label>
                                            <input type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>Phone</label>
                                            <input type="text"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="billing-info mb-4">
                                            <label>Email Address</label>
                                            <input type="text"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                        <div class="your-order-area">
                            <h3>Your order</h3>
                            <div class="your-order-wrap gray-bg-4">
                                <div class="your-order-product-info">
                                    <div class="your-order-top">
                                        <ul>
                                            <li>Product</li>
                                            <li>Total</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-middle">
                                        <ul>
                                            @foreach($products as $product)
                                                <li><span class="order-middle-left">{{$product->title}} X 1</span> <span
                                                        class="order-price"><strong>${{$product->price}}</strong> </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="your-order-bottom">
                                        <ul>
                                            <li class="your-order-shipping">Shipping</li>
                                            <li>Free shipping</li>
                                        </ul>
                                    </div>
                                    <div class="your-order-total">
                                        <ul>
                                            <li class="order-total">Total</li>
                                            <li>${{$totalPrice}}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion element-mrg">
                                        <div id="faq" class="panel-group">
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                                               href="#my-account-1" class="collapsed"
                                                                               aria-expanded="true">Direct bank
                                                            transfer</a>
                                                    </h4>
                                                </div>
                                                <div id="my-account-1" class="panel-collapse collapse show"
                                                     data-bs-parent="#faq">
                                                    <div class="panel-body">
                                                        <p>Please send a check to Store Name, Store Street, Store Town,
                                                            Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                                               href="#my-account-2"
                                                                               aria-expanded="false" class="collapsed">Check
                                                            payments</a></h4>
                                                </div>
                                                <div id="my-account-2" class="panel-collapse collapse"
                                                     data-bs-parent="#faq">
                                                    <div class="panel-body">
                                                        <p>Please send a check to Store Name, Store Street, Store Town,
                                                            Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default single-my-account m-0">
                                                <div class="panel-heading my-account-title">
                                                    <h4 class="panel-title"><a data-bs-toggle="collapse"
                                                                               href="#my-account-3">Cash on delivery</a>
                                                    </h4>
                                                </div>
                                                <div id="my-account-3" class="panel-collapse collapse"
                                                     data-bs-parent="#faq">
                                                    <div class="panel-body">
                                                        <p>Please send a check to Store Name, Store Street, Store Town,
                                                            Store State / County, Store Postcode.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Place-order mt-25">
                                <button type="submit">
                                    <a class="btn-hover">Place Order</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- checkout area end -->
    @include('Pub.layouts.footer')
</div>
<!-- Global Vendor, plugins JS -->
@include('Pub.layouts.footer')
</body>

</html>
