
@include('cssjss')
<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid d-flex">
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('products')}}">Product</a></li>
            <li class="breadcrumb-item active">AddProduct</li>
          </ul>
        </div>
        <di class="col-lg-10">
                <div class="block">
                       <div class="block-body">
                       <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="product_description">Description</label>
                                    <textarea name="product_description" class="form-control" rows="3" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="number" name="price" class="form-control" step="0.01" required>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" name="quantity" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label for="subcategory_id">SubCategory</label>
                                    <select name="subcategory_id" class="form-control" required>
                                        <option value="">Select SubCategory</option>
                                        @foreach($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->subCategory_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </form>
                  </div>
                </div>
              </div>
</div>
