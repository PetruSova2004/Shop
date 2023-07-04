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
                                        <li><a href="cart.html">Cart Page</a></li>
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
                                        <li><a href="shop-3-column.blade.php">Shop 3 Column</a></li>
                                        <li><a href="shop-4-column.blade.php">Shop 4 Column</a></li>
                                        <li><a href="shop-left-sidebar.blade.php">Shop Left Sidebar</a></li>
                                        <li><a href="shop-right-sidebar.blade.php">Shop Right Sidebar</a></li>
                                        <li><a href="shop-list-left-sidebar.blade.php">Shop List Left Sidebar</a>
                                        </li>
                                        <li><a href="shop-list-right-sidebar.blade.php">Shop List Right Sidebar</a>
                                        </li>
                                        <li><a href="cart.html">Cart Page</a></li>
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
                                                Right</a> </li>
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
                        <h2 class="breadcrumb-title">Cart</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
                            <li class="breadcrumb-item active">Cart</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- Cart Area Start -->
        <div class="cart-main-area pt-100px pb-100px">
            <div class="container">
                <h3 class="cart-page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive cart-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Until Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img class="img-responsive ml-15px" src="{{$product->preview_image}}" alt="" /></a>
                                            </td>
                                            <td class="product-name"><a href="#">{{$product->title}}</a></td>
                                            <td class="product-price-cart"><span class="amount">${{$product->price}}</span></td>
                                            <td class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$70.00</td>
                                            <td class="product-remove">
                                                <a href="#"><i class="fa fa-pencil"></i></a>
                                                <a href="{{route('cart.delete', ['id' => $product->id])}}"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cart-shiping-update-wrapper">
                                        <div class="cart-shiping-update">
                                            <a href="{{route('products.index')}}">Continue Shopping</a>
                                        </div>
                                        <div class="cart-clear">
                                            <button>Update Shopping Cart</button>
                                            <a href="{{route('carts.delete')}}">Clear Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="cart-tax">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                                    </div>
                                    <div class="tax-wrapper">
                                        <p>Enter your destination to get a shipping estimate.</p>
                                        <div class="tax-select-wrapper">
                                            <div class="tax-select">
                                                <label>
                                                    * Country
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select">
                                                <label>
                                                    * Region / State
                                                </label>
                                                <select class="email s-email s-wid">
                                                    <option>Bangladesh</option>
                                                    <option>Albania</option>
                                                    <option>Åland Islands</option>
                                                    <option>Afghanistan</option>
                                                    <option>Belgium</option>
                                                </select>
                                            </div>
                                            <div class="tax-select mb-25px">
                                                <label>
                                                    * Zip/Postal Code
                                                </label>
                                                <input type="text" />
                                            </div>
                                            <button class="cart-btn-2" type="submit">Get A Quote</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-lm-30px">
                                <div class="discount-code-wrapper">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                                    </div>
                                    <div class="discount-code">
                                        <p>Enter your coupon code if you have one.</p>
                                        <form>
                                            <input type="text" required="" name="name" />
                                            <button class="cart-btn-2" type="submit">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-md-30px">
                                <div class="grand-totall">
                                    <div class="title-wrap">
                                        <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                    </div>
                                    <h5>Total products <span>$260.00</span></h5>
                                    <div class="total-shipping">
                                        <h5>Total shipping</h5>
                                        <ul>
                                            <li><input type="checkbox" /> Standard <span>$20.00</span></li>
                                            <li><input type="checkbox" /> Express <span>$30.00</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">Grand Total <span>$260.00</span></h4>
                                    <a href="checkout.blade.php">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Area End -->
        @include('Pub.layouts.footer')
    </div>
    <!-- Global Vendor, plugins JS -->
    @include('Pub.layouts.footerSettings')
</body>

</html>
