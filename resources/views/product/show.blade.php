<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Product </title>
    @include('../cssjss')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <style>
        .grid-view-item {
            margin-bottom: 30px;
        }
        .grid-view_image {
            position: relative;
        }
        .product-details {
            padding: 10px;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 10px 10px;
            background-color: #f9f9f9;
        }
        .product-name a {
            font-size: 1rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }
        .product-price {
            font-size: 1.2rem;
            color: #28a745;
            font-weight: bold;
            margin-top: 10px;
        }
        .product-review {
            margin-top: 10px;
        }
        .product-review i {
            color: #ffcc00;
        }
        .button-set {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .button-set button, .button-set form button {
            border: none;
            background: none;
            cursor: pointer;
        }
        .button-set button i, .button-set form button i {
            font-size: 1.5rem;
            color: #333;
        }
        .button-set button:hover i, .button-set form button:hover i {
            color: #28a745;
        }
    </style>
</head>
<body>
@include('../navigation.header')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
            <div class="grid-view_image">
                <!-- start product image -->
                <a href="" class="grid-view-item__link">
                    <!-- image -->
                    <img class="grid-view-item__image primary blur-up lazyload" src="{{ asset('storage/images/' . $product->image) }}" alt="image" title="product">
                    <!-- End image -->
                    <!-- Hover image -->
                    <img class="grid-view-item__image hover blur-up lazyload" src="{{ asset('storage/images/' . $product->image) }}" alt="image" title="product">
                    <!-- End hover image -->
                </a>
                <!-- end product image -->
            </div>
            <!--start product details -->
            <div class="product-details text-center">
                <!-- product name -->
                <div class="product-name">
                    <a href="#">{{$product->product_name}}</a>
                </div>
                <!-- End product name -->
                <!-- product price -->
                <div class="product-price">
                    ${{$product->price}}
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
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="add-to-cart"><i class="icon anm anm-bag-l"></i></button>
                    </form>
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
</div>


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
</body>
</html>
