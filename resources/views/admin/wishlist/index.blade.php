<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Wishlist</title>
</head>
@include('adminCssJs')
<Body>
<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Wishlist</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>wishlist Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($wishlists as $wishlist)
                        <tr>
                            <td>{{ $wishlist->id }}</td>
                            <td>{{ $wishlist->user->name }}</td>
                            <td>{{ $wishlist->product->product_name }}</td>
                            <td>
                        <form action="{{ route('admin.wishlist.destroy', $wishlist->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>

</body>
</html>