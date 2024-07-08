<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>OrderItem</title>
</head>
@include('adminCssJs')
<Body>

<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom"></div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Order Items</li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block margin-bottom-sm">
                        <div class="title"><strong>Order Items Table</strong></div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Order ID</th>
                                        <th>Product ID</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orderItems as $orderItem)
                                    <tr>
                                        <td>{{ $orderItem->id }}</td>
                                        <td>{{ $orderItem->order_id }}</td>
                                        <td>{{ $orderItem->product_id }}</td>
                                        <td>{{ $orderItem->product->product_name }}</td>
                                        <td>{{ $orderItem->quantity }}</td>
                                        <td>${{ $orderItem->price }}</td>
                                        <td>{{ $orderItem->created_at->format('d M Y H:i') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>