<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Checkout</title>
    @include('cssjss')
</head>
<div class="pageWrapper">
    @include('navigation.header')

    <div id="page-content">
        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-width">Checkout</h1></div>
            </div>
        </div>

        <div class="container mt-5">
            <h2>Your Order</h2>
            <div class="order-summary">
                @foreach ($cartItems as $cartItem)
                    <div class="order-item">
                        <img src="{{ asset('storage/images/' . $cartItem->product->image) }}" alt="{{ $cartItem->product->name }}" style="max-width: 100px;">
                        <div class="order-details">
                            <h3>{{ $cartItem->product->name }}</h3>
                            <p>Price: ${{ $cartItem->product->price }}</p>
                            <p>Quantity: {{ $cartItem->quantity }}</p>
                        </div>
                    </div>
                @endforeach
                <hr>
                <h4>Subtotal: ${{ $cartItems->sum(function ($item) { return $item->product->price * $item->quantity; }) }}</h4>
            </div>

            <form action="{{ route('checkout.place.order') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="shipping_address">Shipping Address</label>
                    <input type="text" name="shipping_address" class="form-control" placeholder="Shipping Address" required>
                </div>
                <div class="form-group">
                    <label for="payment_method">Payment Method</label>
                    <input type="text" name="payment_method" class="form-control" placeholder="Payment Method" required>
                </div>

                <button type="submit" class="btn btn-primary">Place Order</button>
            </form>
        </div>
    </div>

    @include('navigation.footer')

    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>

    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/jquery.cookie.js"></script>
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/lazysizes.js"></script>
    <script src="assets/js/main.js"></script>
</div>
</body>
</html>
