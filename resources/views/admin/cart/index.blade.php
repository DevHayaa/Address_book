

@include('adminCssJs')

<div class="page-content">
    <!-- Page Header -->
    <div class="page-header no-margin-bottom"></div>
    <!-- Breadcrumb -->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Cart</li>
        </ul>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block margin-bottom-sm">
                        <div class="title"><strong>Cart Table</strong></div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Date Added</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cartItems as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->user_id }}</td> <!-- Assuming you have a user_id in your Cart model -->
                                        <td>{{ $item->product->product_name }}</td> <!-- Assuming 'product' is the relationship method -->
                                        <td>{{ $item->quantity }}</td>
                                        <td>${{ $item->product->price }}</td> <!-- Assuming 'price' is a property of the product -->
                                        <td>{{ $item->created_at->format('d M Y H:i') }}</td>
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
