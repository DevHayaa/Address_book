<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
    @include('../cssjss')
</head>
<div class="pageWrapper">
    @include('../navigation.header')
    <!--Body Content-->
    @php
    $cartCount = count($cartItems); 
@endphp
    <div id="page-content">
              <!--Collection Banner-->
              <div class="collection-header">
            <div class="collection-hero">
                <div class="collection-hero__image"><img class="blur-up lazyload" src="{{asset('assets/images/cat-women2.jpg')}}" alt="Women" title="Women" /></div>
                <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Shopping Cart</h1></div>
            </div>
        </div>
        <!--End Collection Banner-->
<div class="container mt-5">
    <h2>Your Cart</h2>
    <div id="cart-items">
        <table class="table">
            <thead>
            <tr>
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cartItems as $cartItem)
                <tr id="cart-row-{{ $cartItem->product_id }}">
                    <td>
                        <img src="{{ asset('storage/images/' . $cartItem->product->image) }}" alt="{{ $cartItem->product->name }}" style="max-width: 100px;">
                    </td>
                    <td>{{ $cartItem->product->product_name }}</td>
                    <td>${{ $cartItem->product->price }}</td>
                    
                    <td>
                        <input type="number" class="form-control quantity" value="{{ $cartItem->quantity }}" data-product-id="{{ $cartItem->product_id }}">
                    </td>
                    <td>${{ $cartItem->product->price * $cartItem->quantity }}</td>
                    <td>
                        <button class="btn btn-sm btn-primary update-cart" data-product-id="{{ $cartItem->product_id }}">Update</button>
                        <button class="btn btn-sm btn-danger remove-from-cart" data-product-id="{{ $cartItem->product_id }}">Remove</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('checkout') }}" class="btn btn-primary">Check Out</a>
</div>

<script>
    $(document).ready(function () {
        // Update cart item quantity
        $('.update-cart').click(function () {
            var productId = $(this).data('product-id');
            var quantity = $('#cart-row-' + productId + ' .quantity').val();

            $.ajax({
                url: '/cart/update/' + productId,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    quantity: quantity
                },
                success: function (response) {
                    alert(response.message);
                    location.reload();
                },
                error: function (xhr) {
                    alert(xhr.responseJSON.message);
                }
            });
        });

        // Remove cart item
        $('.remove-from-cart').click(function () {
            var productId = $(this).data('product-id');

            $.ajax({
                url: '/cart/remove/' + productId,
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    alert(response.message);
                    $('#cart-row-' + productId).remove();
                },
                error: function (xhr) {
                    alert(xhr.responseJSON.message);
                }
            });
        });
    });
</script>

</body>
</html>
