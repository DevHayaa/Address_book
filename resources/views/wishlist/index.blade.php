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
                                @foreach($wishlistItems as $wishlistItem)
                                    <tr>
                                        <td class="product-remove text-center" valign="middle">
                                            <form action="{{ route('wishlist.remove', $wishlistItem->product->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i class="icon icon anm anm-times-l"></i></button>
                                            </form>
                                        </td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="{{ asset('storage/images/' . $wishlistItem->product->image) }}" alt="{{ $wishlistItem->product->product_name }}" title="{{ $wishlistItem->product->product_name }}" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#">{{ $wishlistItem->product->product_name }}</a></h4></td>
                                        <td class="product-price text-center"><span class="amount">${{ $wishlistItem->product->price }}</span></td>
                                        <td class="stock text-center">
                                            @if($wishlistItem->product->stock > 0)
                                                <span class="in-stock">In stock</span>
                                            @else
                                                <span class="out-stock">Out of stock</span>
                                            @endif
                                        </td>
                                        <td class="product-subtotal text-center">
                                            <form action="{{ route('cart.add', $wishlistItem->product->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-small">Add To Cart</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>                   
                </div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
    @include('navigation.footer')
    <!--End Footer-->
    <!--Scroll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scroll Top-->
</div>
</body>
</html>
