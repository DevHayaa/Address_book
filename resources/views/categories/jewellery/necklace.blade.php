<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Necklace</title>
    @include('../cssjss')
    <style>
        .grid-view-item {
            padding: 15px;
        }
        .grid-view-item img {
            width: 100%;
            height: auto;
        }
        .product-details {
            padding: 10px;
        }
        button.add-to-cart{
            cursor:pointer;
            height:35px;
            width:35px;
        }
        button.add-to-cart:hover{
           transform:scale(1.1);
        }
        button.add-to-wishlist{
            cursor:pointer;
            height:40px;
            width:40px;
        }
        button.add-to-wishlist:hover{
           transform:scale(1.1);
        }
    </style>
</head>
<div class="pageWrapper">
    @include('../navigation.header')
    <!--Body Content-->
    <div id="page-content">
              <!--Collection Banner-->
              <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"><img class="blur-up lazyload" src="{{asset('assets/images/cat-women2.jpg')}}" alt="Women" title="Women" /></div>
                <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">NeckLace</h1></div>
            </div>
        </div>
        <!--End Collection Banner-->
        
        <div class="container-fluid">
            <div class="row">
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-10 main-col">
                    <div class="productList">
                        <div class="grid-products grid--view-items">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" src="{{ asset('storage/images/' . $product->image) }}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"src="{{ asset('storage/images/' . $product->image) }}" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">{{$product->product_name}}</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">{{$product->price}}</span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <!-- Start product button -->
                                                <button class="add-to-cart" data-product-id="{{ $product->id }}"><i class="icon anm anm-bag-l"></i></button>
                                                <form action="{{ route('wishlist.add', $product->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="wishlist add-to-wishlist"><i class="icon anm anm-heart-l"></i></button>
                                                </form>
                                                <!-- end product button -->
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
    </div>
    <!--End Body Content-->
    
    @include('navigation.footer')

    <!--Scroll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scroll Top-->
<!-- Example product view -->


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
</html>
