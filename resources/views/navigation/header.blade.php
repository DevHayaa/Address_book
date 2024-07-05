<!--Search Form Drawer-->
<div class="search">
        <div class="search__form">
        <form action="{{ route('product.search') }}" method="GET" class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">Close <i class="fa fa-close"></i></div>
                <div class="form-group">
                    <input type="search" name="query" placeholder="What are you searching for...">
                    <button type="submit" class="submit">Search</button>
                </div>
            </div>
        </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <div class="top-header home8-jewellery-top">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	<div class="text-center"><p class="top-header_middle-text"></p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="{{route('admin.login')}}">Login</a></li>
                        <li><a href="{{route('admin.register')}}">Create Account</a></li>
                        <li><a href="{{route('wishlist.index')}}">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex home8-jewellery-header">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<div class="col-3 col-sm-3 col-md-3 col-lg-8 d-block d-lg-none">
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        <i class="icon anm anm-times-l"></i>
                        <i class="anm anm-bars-r"></i>
                    </button>
                </div>
            	<!--Search Icon-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2 d-none d-lg-block">
                    <div class="site-header__search text-left">
                        <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
                <!--End Search Icon-->
                <!--Desktop Logo-->
                <div class="logo col-5 col-sm-6 col-md-6 col-lg-8 text-center">
                    <a href="{{route('home')}}">
                        <h3>Gems & Glow</h3>
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                  <a href="{{route('cart.view')}}" title="Cart">
                      <i class="icon anm anm-bag-l"></i>
                      <span id="cart-count">{{ session('cart_count') }}</span>
                  </a>
                        <!--Minicart Popup-->
                        <!-- <div id="header-cart" class="block block-cart">
                        	<ul class="mini-products-list">
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                        <div class="variant-cart">Black / XL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                        	<div class="product-price">
                                            	<span class="money">$59.00</span>
                                            </div>
                                         </div>
									</div>
                                </li>
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                        <div class="variant-cart">Gray / XXL</div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                       	<div class="priceRow">
                                            <div class="product-price">
                                                <span class="money">$99.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                    <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div> -->
                        <!--End Minicart Popup-->
                    </div>
                    <!--Mobile Search-->
                    <div class="site-header__search d-block d-lg-none">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                    <!--End Mobile Search-->
                </div>
        	</div>
        </div>
    </div>
    <!--Desktop Menu-->
    <nav class="belowlogo" id="AccessibleNav">
        <ul id="siteNav" class="site-nav medium center hidearrow">
            <!-- <li class="lvl1 parent megamenu"><a href="#">Home <i class="anm anm-angle-down-l"></i></a>
            </li> -->
        <li class="lvl1 parent dropdown"><a href="#">Jewellery <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="{{route('anklets')}}" class="site-nav">Anklets</a></li>
            <li><a href="{{route('bangles')}}" class="site-nav">Bangles</a></li>
            <li><a href="{{route('rings')}}" class="site-nav">Rings</a></li>
            <li><a href="{{route('earRings')}}" class="site-nav">Ear rings</a></li>
            <li><a href="{{route('necklace')}}" class="site-nav">Necklace</a></li>
          </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Complexion <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="{{route('blushOn')}}" class="site-nav">Blushon</a></li>
            <li><a href="{{route('foundation')}}" class="site-nav">Foundation</a></li>
            <li><a href="{{route('facePowder')}}" class="site-nav">Face powder</a></li>

          </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Lips <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="{{route('lipTint')}}" class="site-nav">Lip tint</a></li>
            <li><a href="{{route('lipGloss')}}" class="site-nav">Lip gloss</a></li>
            <li><a href="{{route('lipstick')}}" class="site-nav">Lipstick</a></li>
            <li><a href="{{route('lipLiner')}}" class="site-nav">Lip pencil</a></li>
          </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Nails <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="{{route('nailPaints')}}" class="site-nav">Nail paint</a></li>
            <li><a href="{{route('nailPaintRemover')}}" class="site-nav">Nail polish remover</a></li>
          </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Eyes <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="{{route('eyeShadow')}}" class="site-nav">Eye shadow</a></li>
            <li><a href="{{route('eyeLiner')}}" class="site-nav">Eye liner</a></li>
            <li><a href="{{route('mascara')}}" class="site-nav">Mascara</a></li>
            <li><a href="{{route('kajal')}}" class="site-nav">Kajal</a></li>
          </ul>
        </li>
        <li class="lvl1"><a href="#"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a></li>
      </ul>
    </nav>
    <!--End Desktop Menu-->
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        	<li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm anm-plus-l"></i></a>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Jewellery <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="" class="site-nav">Anklets</a></li>
            <li><a href="" class="site-nav">Bangles</a></li>
            <li><a href="" class="site-nav">Rings</a></li>
            <li><a href="" class="site-nav">Ear rings</a></li>
            <li><a href="" class="site-nav">Necklace</a></li>
          </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Complexion <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="" class="site-nav">Blushon</a></li>
            <li><a href="" class="site-nav">Fixer</a></li>
            <li><a href="" class="site-nav">Concealer</a></li>
            <li><a href="" class="site-nav">Foundation</a></li>
            <li><a href="" class="site-nav">Highlighter</a></li>
            <li><a href="" class="site-nav">Creams</a></li>
            <li><a href="" class="site-nav">contour</a></li>
            <li><a href="" class="site-nav">Face powder</a></li>
            <li><a href="" class="site-nav">Primer</a></li>

          </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Lips <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="" class="site-nav">Lip tint</a></li>
            <li><a href="" class="site-nav">Lip gloss</a></li>
            <li><a href="" class="site-nav">Lipstick</a></li>
            <li><a href="" class="site-nav">Lip balm</a></li>
            <li><a href="" class="site-nav">Lip pencil</a></li>
          </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Nails <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="" class="site-nav">Nail paint</a></li>
            <li><a href="" class="site-nav">Nail polish remover</a></li>
          </ul>
        </li>
        <li class="lvl1 parent dropdown"><a href="#">Eyes <i class="anm anm-angle-down-l"></i></a>
          <ul class="dropdown">
            <li><a href="" class="site-nav">Eye shadow</a></li>
            <li><a href="" class="site-nav">Eye liner</a></li>
            <li><a href="" class="site-nav">Mascara</a></li>
            <li><a href="" class="site-nav">Kajal</a></li>
            <li><a href="" class="site-nav">Eyebrow pencil</a></li>
          </ul>
        </li>
        	<li class="lvl1"><a href="#"><b>Buy Now!</b></a>
        </li>
      </ul>
	</div>
	<!--End Mobile Menu-->
  <script>

$(document).ready(function() {
    updateCartCount(); // Update count on page load

    function updateCartCount() {
        $.ajax({
            url: "{{ route('cart.count') }}",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#cart-count').text(response.count);
            }
        });
    }
});
</script>