<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Wishlist</title>
@include('cssjss')
</head>
<body class="page-template belle">
<div class="pageWrapper">
    @include('navigation.header')
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Wish List</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<form action="#">
                        <div class="wishlist-table table-content table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    	<th class="product-name text-center alt-font">Remove</th>
                                        <th class="product-price text-center alt-font">Images</th>
                                        <th class="product-name alt-font">Product</th>
                                        <th class="product-price text-center alt-font">Unit Price</th>
                                        <th class="stock-status text-center alt-font">Stock Status</th>
                                        <th class="product-subtotal text-center alt-font">Add to Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    	<td class="product-remove text-center" valign="middle"><a href="#"><i class="icon icon anm anm-times-l"></i></a></td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="assets/images/product-images/product-image8.jpg" alt="" title="" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#">Minerva Dress black</a></h4></td>
                                        <td class="product-price text-center"><span class="amount">$165.00</span></td>
                                        <td class="stock text-center">
                                            <span class="in-stock">in stock</span>
                                        </td>
                                        <td class="product-subtotal text-center"><button type="button" class="btn btn-small">Add To Cart</button></td>
                                    </tr>
                                    <tr>
                                    	<td class="product-remove text-center" valign="middle"><a href="#"><i class="icon icon anm anm-times-l"></i></a></td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="assets/images/product-images/product-image4.jpg" alt="" title="" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#">Sueded Cotton Pant in Khaki</a></h4></td>
                                        <td class="product-price text-center"><span class="amount">$150.00</span></td>
                                        <td class="stock text-center">
                                            <span class="out-stock">Out Of stock</span>
                                        </td>
                                        <td class="product-subtotal text-center"><button type="button" class="btn btn-small">Add To Cart</button></td>
                                    </tr>
                                    <tr>
                                    	<td class="product-remove text-center" valign="middle"><a href="#"><i class="icon icon anm anm-times-l"></i></a></td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="assets/images/product-images/product-image5.jpg" alt="" title="" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#">Woven Solid Midi Shirt Dress</a></h4></td>
                                        <td class="product-price text-center"><span class="amount">$150.00</span></td>
                                        <td class="stock text-center">
                                            <span class="in-stock">in stock</span>
                                        </td>
                                        <td class="product-subtotal text-center"><button type="button" class="btn btn-small">Add To Cart</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>                   
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
    @include('navigation.footer')
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
</div>
</body>

<!-- belle/wishlist.html   11 Nov 2019 12:22:27 GMT -->
</html>