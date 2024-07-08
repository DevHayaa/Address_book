<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Gems & Glow</title>
@include('cssjss')
</head>
<body class="template-index home8-jewellery belle">
<div id="pre-loader">
    <img src="assets/images/loader.gif" alt="Loading..." />
</div>
<div class="pageWrapper">
@include('navigation.header')
    
    <!--Body Content-->
    <div id="page-content">
    
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="assets/images/slideshow-banners/home8-jewelry-banner2.jpg" src="assets/images/slideshow-banners/home8-jewelry-banner2.jpg" alt="Wedding bands" title="Wedding bands" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption left">
                                        <h2 class="h1 mega-title slideshow__title">Wedding bands</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Online Jewellery and Cosmetics store</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="" src="https://img.freepik.com/free-photo/cosmetic-item-with-marijuana-leaves_23-2151336400.jpg?t=st=1720644007~exp=1720647607~hmac=3c5fe5167d7c2788a7c8776087c2082f06d380f4a5f272f0161d26beb750af90&w=826" alt="Shop New Collection" title="Shop New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content middle">
                            	<div class="container">
                                    <div class="wrap-caption right">
                                        <h2 class="h1 mega-title slideshow__title">Shop New Collection</h2>
                                        <span class="mega-subtitle slideshow__subtitle">From Hight to low, classic or modern. We have you<br>covered</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
    
        <!--New Arrivals-->
        <div class="product-rows section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
                            <h2 class="h2">Our Choice</h2>
                            <p>Grab these new items before they are gone!</p>
                        </div>
            		</div>
                </div>
 <div class="container">
         <div class="grid-products grid--view-items">
        <div class="row">
        @foreach($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
                    <div class="grid-view_image">
                        <!-- start product image -->
                        <a href="" class="grid-view-item__link">
                            <!-- image -->
                            <img class="grid-view-item__image primary blur-up lazyload" src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->product_name }}" title="{{ $product->product_name }}">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="grid-view-item__image hover blur-up lazyload" src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->product_name }}" title="{{ $product->product_name }}">
                            <!-- End hover image -->
                        </a>
                        <!-- end product image -->
                        
                        <!--start product details -->
                        <div class="product-details hoverDetails text-center mobile">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">{{ $product->product_name }}</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">${{ $product->price }}</span>
                            </div>
                            <!-- End product price -->
                            <!-- product review -->
                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                            <!-- product button -->
                            <div class="button-set">
                                <a href="#content_quickview" title="Quick View" class="quick-view-popup quick-view" tabindex="0">
                                    <i class="icon anm anm-search-plus-r"></i>
                                </a>
                                <!-- Start product button -->
                                <button class="add-to-cart" data-product-id="{{ $product->id }}"><i class="icon anm anm-bag-l"></i></button>
                                <form action="{{ route('wishlist.add', $product->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="wishlist add-to-wishlist"><i class="icon anm anm-heart-l"></i></button>
                                </form>
                                <!-- end product button -->
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
        <div class="row justify-content-center">
        {{ $products->links() }}
        </div>
    </div>
           </div>
        </div>	
        <!--End Featured Product-->
</div>  
</div>

        
        <!--Parallax Section-->
        <div class="section">
            <div class="hero hero--large hero__overlay bg-size">
            	<img class="bg-img" src="assets/images/parallax-banners/parallax-banner.jpg" alt="" />
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text left text-small font-bold">
                            <h2 class="h2 mega-title">Gems&Glow <br> The best choice for your store</h2>
                            <div class="rte-setting mega-subtitle">>Explore a world of beauty and elegance with Gems & Glow. We specialize in offering exquisite cosmetics and imitation jewelry that reflect your unique style and enhance your natural beauty.</div>
                            <a href="#" class="btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Parallax Section-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    

    
    <!-- Newsletter Popup -->
	<div class="newsletter-wrap" id="popup-container">
      <div id="popup-window">
        <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
        <!-- Modal content-->
        <div class="display-table splash-bg">
          <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
          <div class="display-table-cell width60 text-center">
            <div class="newsletter-left">
              <h2>Join Our Mailing List</h2>
              <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
              <form action="#" method="post">
                <div class="input-group">
                  <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                  <span class="input-group__btn">
                  <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Subscribe</span> </button>
                  </span> </div>
              </form>
              <ul class="list--inline site-footer__social-icons social-icons">
                <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!-- End Newsletter Popup -->
    @include('navigation.footer')
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <script src="assets/js/vendor/instagram-feed.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
     <!--Instagram Js-->
     
     <!--End Instagram Js-->
     <!--For Newsletter Popup-->
     <script>
		jQuery(document).ready(function(){  
		  jQuery('.closepopup').on('click', function () {
			  jQuery('#popup-container').fadeOut();
			  jQuery('#modalOverly').fadeOut();
		  });
		  
		  var visits = jQuery.cookie('visits') || 0;
		  visits++;
		  jQuery.cookie('visits', visits, { expires: 1, path: '/' });
		  console.debug(jQuery.cookie('visits')); 
		  if ( jQuery.cookie('visits') > 1 ) {
			jQuery('#modalOverly').hide();
			jQuery('#popup-container').hide();
		  } else {
			  var pageHeight = jQuery(document).height();
			  jQuery('<div id="modalOverly"></div>').insertBefore('body');
			  jQuery('#modalOverly').css("height", pageHeight);
			  jQuery('#popup-container').show();
		  }
		  if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
		}); 
		
		jQuery(document).mouseup(function(e){
		  var container = jQuery('#popup-container');
		  if( !container.is(e.target)&& container.has(e.target).length === 0)
		  {
			container.fadeOut();
			jQuery('#modalOverly').fadeIn(200);
			jQuery('#modalOverly').hide();
		  }
		});
		
		/*--------------------------------------
			Promotion / Notification Cookie Bar 
		  -------------------------------------- */
		  if(Cookies.get('promotion') != 'true') {   
			 $(".notification-bar").show();         
		  }
		  $(".close-announcement").on('click',function() {
			$(".notification-bar").slideUp();  
			Cookies.set('promotion', 'true', { expires: 1});  
			return false;
		  });
	</script>
    <!--End For Newsletter Popup-->
    <script>
    $(document).ready(function () {
        $('.add-to-cart').click(function () {
            var productId = $(this).data('product-id');

            $.ajax({
                url: '{{ route('cart.add') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: productId,
                    quantity: 1 // Assuming default quantity is 1
                },
                success: function (response) {
                    alert(response.message);
                    updateCartCount(response.cart_count);
                    updateQuantityInCart(productId, 1); // Update quantity in cart section
                },
                error: function (xhr) {
                    alert(xhr.responseJSON.message);
                }
            });
        });

        function updateQuantityInCart(productId, quantity) {
            // Example: Update quantity in cart section after adding to cart
            var cartItemRow = $('#cart-item-' + productId);
            if (cartItemRow.length > 0) {
                var quantityField = cartItemRow.find('.quantity');
                quantityField.val(quantity); // Update quantity field in cart section
            } else {
                // Handle case where product is not initially in cart section
                // You may optionally reload or refresh the cart section here
            }
        }
    });
</script>
</div>
</body>

<!-- belle/home8-jewellery.html   11 Nov 2019 12:31:16 GMT -->
</html>


