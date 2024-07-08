<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Order</title>
</head>
@include('adminCssJs')
<Body>
<header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary"></strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary"></strong><strong></strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
        
            <!-- Log out -->
            <form action="{{ route('admin.logout') }}" method="POST" id="logout-form">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
      </nav>
  </header>
 <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
   <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
        <!-- Sidebar Navidation Menus-->
          <span class="heading">   @if(isset($user))
            <div class="title">
                <h1 class="h5">{{ $user->name }}</h1>
                <p>{{ $user->role }}</p>
            </div>
              @else
                  <p>User not found.</p>
              @endif
              </div>
          </span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                <li><a href="{{route('category')}}"> <i class="icon-grid"></i>Categories</a></li>
                <li><a href="{{route('subCategory')}}"> <i class="icon-grid"></i>Sub-Categories</a></li>
                <li><a href="{{route('products')}}"> <i class="fa fa-bar-chart"></i>Products</a></li>
                <li><a href="{{ route('admin.wishlist.index') }}"><i class="fa fa-bar-chart"></i> Wishlist</a></li>
                <li><a href="{{ route('contacts.index') }}"><i class="fa fa-bar-chart"></i> Contact</a></li>
                <li><a href="{{route('admin.cart')}}"> <i class="icon-padnote"></i>Cart</a></li>
                <li><a href="{{route('admin.topSellingProducts')}}"> <i class="icon-padnote"></i>Best Selling Product</a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Orders</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{route('admin.orders')}}">Order</a></li>
                    <li><a href="{{route('admin.order-items')}}">Order Items</a></li>
                 
                  </ul>
                </li>
        
   </nav>
      <!-- Sidebar Navigation end-->
<div class="page-content">
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block margin-bottom-sm">
                        <div class="title"><strong>Orders Table</strong></div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Total Price</th>
                                        <th>Status</th>
                                        <th>Payment Method</th>
                                        <th>Shipping Address</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->user->name }}</td>
                                        <td>${{ $order->total_price }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->payment_method }}</td>
                                        <td>{{ $order->shipping_address }}</td>
                                        <td>{{ $order->created_at->format('d M Y H:i') }}</td>
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