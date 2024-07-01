<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Cart</title>
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
                <div class="wrapper"><h1 class="page-width">Shopping Cart</h1></div>
            </div>
        </div>
        <!--End Page Title-->
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                    <div class="cart-table table-content table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-name text-center alt-font">Remove</th>
                                    <th class="product-price text-center alt-font">Images</th>
                                    <th class="product-name alt-font">Product</th>
                                    <th class="product-price text-center alt-font">Unit Price</th>
                                    <th class="product-quantity text-center alt-font">Quantity</th>
                                    <th class="product-subtotal text-center alt-font">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $productId => $item)
                                    <tr>
                                        <td class="product-remove text-center" valign="middle">
                                            <form action="{{ route('cart.remove', $productId) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i class="icon icon anm anm-times-l"></i></button>
                                            </form>
                                        </td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="" alt="" title="" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#">{{ $item['name'] }}</a></h4></td>
                                        <td class="product-price text-center"><span class="amount">${{ $item['price'] }}</span></td>
                                        <td class="product-quantity text-center">
                                            <form action="{{ route('cart.update', $productId) }}" method="POST">
                                                @csrf
                                                <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control">
                                                <button type="submit" class="btn btn-small mt-2">Update</button>
                                            </form>
                                        </td>
                                        <td class="product-subtotal text-center"><span class="amount">${{ $item['price'] * $item['quantity'] }}</span></td>
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
