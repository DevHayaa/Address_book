<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>AddCategory</title>
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
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid d-flex">
          </div>
        </div>
        <div class="">
                <div class="block">
                       <div class="block-body">
                    <form action="{{ route('categories.store') }}" method="post">
                    @csrf 
                      <div class="form-group">
                        <label class="form-control-label">Category Name</label>
                        <input type="text" name="category" placeholder="Category Name" class="form-control">
                      </div>
                      <div class="form-group">       
                        <label class="form-control-label">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Description" rows="3"></textarea>
                      </div>
                      <div class="form-group">       
                        <input type="submit" value="submit" class="btn btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
</div>
</body>
</html>