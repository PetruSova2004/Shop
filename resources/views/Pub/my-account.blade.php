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
                <li><a href="my-account.html"><i class="fa fa-user"></i> Account</a></li>
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
                                    <li><a href="my-account.html">Account Page</a></li>
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
                                    <li><a href="my-account.html">Account Page</a></li>
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
                    <h2 class="breadcrumb-title">Account</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                        <li class="breadcrumb-item active">Account</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <!-- account area start -->
    <div class="account-dashboard pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <!-- Nav tabs -->
                    <div class="dashboard_tab_button" data-aos="fade-up" data-aos-delay="0">
                        <ul role="tablist" class="nav flex-column dashboard-list">
                            <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
                            <li><a href="#orders" data-bs-toggle="tab" class="nav-link">Orders</a></li>
                            <li><a href="#downloads" data-bs-toggle="tab" class="nav-link">Downloads</a></li>
                            <li><a href="#address" data-bs-toggle="tab" class="nav-link">Addresses</a></li>
                            <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Account details</a>
                            </li>
                            <li><a href="{{route('logout')}}" class="nav-link">logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard_content" data-aos="fade-up" data-aos-delay="200">
                        <div class="tab-pane fade show active" id="dashboard">
                            <h4>Dashboard </h4>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent
                                    orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a
                                    href="#">Edit your password and account details.</a></p>
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <h4>Orders</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->created_at }}</td>
                                            <td><span class="success">{{$order->confirmation}}</span></td>
                                            <td>${{\App\Facades\UserService::getOrderPrice($order)}}</td>
                                            <td><a href="{{route('checkout.delete', ['id' => $order->id])}}"
                                                   class="view">Cancel</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="downloads">
                            <h4>Downloads</h4>
                            <div class="table_page table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Downloads</th>
                                        <th>Expires</th>
                                        <th>Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Shopnovilla - Free Real Estate PSD Template</td>
                                        <td>May 10, 2018</td>
                                        <td><span class="danger">Expired</span></td>
                                        <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                    </tr>
                                    <tr>
                                        <td>Organic - ecommerce html template</td>
                                        <td>Sep 11, 2018</td>
                                        <td>Never</td>
                                        <td><a href="#" class="view">Click Here To Download Your File</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="address">
                            <p>The following addresses will be used on the checkout page by default.</p>
                            <h5 class="billing-address">Billing address</h5>
                            <a href="#" class="view">Edit</a>
                            <p class="mb-2"><strong>Michael M Hoskins</strong></p>
                            <address>
                                <span class="mb-1 d-inline-block"><strong>City:</strong> Seattle</span>,
                                <br>
                                <span class="mb-1 d-inline-block"><strong>State:</strong> Washington(WA)</span>,
                                <br>
                                <span class="mb-1 d-inline-block"><strong>ZIP:</strong> 98101</span>,
                                <br>
                                <span><strong>Country:</strong> USA</span>
                            </address>
                        </div>
                        <div class="tab-pane fade" id="account-details">
                            <h3>Account details </h3>
                            <div class="login">
                                <div class="login_form_container">
                                    <div class="account_login_form">
                                        <form action="{{route('pub.user.details')}}" method="post">
                                            @method('POST')
                                            @csrf
                                            <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1"
                                                                                      name="gender"
                                                                                      @if(\Illuminate\Support\Facades\Auth::user()->gender == 1) checked @endif> Mr.</span>
                                                <span class="custom-radio"><input type="radio" value="2"
                                                                                  name="gender"
                                                                                  @if(\Illuminate\Support\Facades\Auth::user()->gender == 2) checked @endif> Mrs.</span>
                                            </div>
                                            <br>
                                            <div class="default-form-box mb-20">
                                                <label>Name</label>
                                                <input type="text" name="name"
                                                       value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Email</label>
                                                <input type="text" name="email"
                                                       value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                                                       readonly>
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Password</label>
                                                <input type="password" name="password"
                                                       value="{{\Illuminate\Support\Facades\Auth::user()->password}}"
                                                       readonly>
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>age</label>
                                                <input type="number" name="age"
                                                       value="{{\Illuminate\Support\Facades\Auth::user()->age}}">
                                            </div>
                                            <br>

                                            <div class="default-form-box mb-20">
                                                <label>Country</label>
                                                <select class="form-control" id="country" name="country">
                                                    @foreach($countries as $country)
                                                        <option
                                                            value={{$country->id}} @if($country->name === \Illuminate\Support\Facades\Auth::user()->address) selected @endif>
                                                            {{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <br>

                                            <label class="checkbox-default" for="offer">
                                                <input type="checkbox" id="offer">
                                                <span>Receive offers from our partners</span>
                                            </label>
                                            <br>
                                            <label class="checkbox-default checkbox-default-more-text" for="newsletter">
                                                <input type="checkbox" id="newsletter">
                                                <span>Sign up for our newsletter<br><em>You may unsubscribe at any
                                                        moment. For that purpose, please find our contact info in the
                                                        legal notice.</em></span>
                                            </label>
                                            <div class="save_button mt-3">
                                                <button class="btn" type="submit">Save</button>
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
    <!-- account area start -->
    @include('Pub.layouts.footer')
</div>
<!-- Global Vendor, plugins JS -->
<!-- JS Files
============================================ -->
@include('Pub.layouts.footerSettings')
</body>

</html>
