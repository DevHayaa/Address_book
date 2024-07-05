<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    @include('cssjss')
    <div class="pageWrapper">
        @include('navigation.header')

        <div id="page-content">
            <div class="collection-header">
                <div class="collection-hero">
                    <div class="collection-hero__image"><img class="blur-up lazyload" src="{{asset('assets/images/cat-women2.jpg')}}" alt="Women" title="Women" /></div>
                    <div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">Thank You</h1></div>
                </div>
            </div>

            <div class="container mt-5 text-center">
                <h2>Thank You for Your Order!</h2>
                <p>Your order has been placed successfully.</p>
                <a href="{{ route('home') }}" class="btn btn-primary">Continue Shopping</a>
            </div>
        </div>
    </div>

    @include('navigation.footer')
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
</body>
</html>
