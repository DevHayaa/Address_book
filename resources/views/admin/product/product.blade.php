
@include('adminCssJs')
<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid d-flex">
            <a href="{{route('addProduct')}}" class="btn btn-success">Add product</a>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">product</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>product Table</strong></div>
                  <form method="GET" action="{{ route('products') }}">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Search for products" value="{{ request()->query('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Subcategory</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}</th>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->product_description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                @if ($product->image)
                                    <img src="{{ asset('storage/images/' . $product->image) }}" alt="Product Image" style="max-width: 100px; height: auto;">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ $product->subCategory->subCategory_name }}</td>
                            <td>
                                <a href="{{ route('editProduct', $product->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('deleteProduct', $product->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            {{ $products->appends(['search' => request()->query('search')])->links() }}
        </div>
</div>
                  </div>
                </div>
              </div>
      </div>

 