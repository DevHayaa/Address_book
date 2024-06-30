@include('adminCssJs')
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
            <li class="breadcrumb-item active">EditProduct</li>
          </ul>
        </div>
        <div class="col-lg-10">
                <div class="block">
                       <div class="block-body">
                       <form action="{{ route('updateProduct', $product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $product->product_name }}">
                                </div>

                                <div class="form-group">
                                    <label for="product_description">Product Description</label>
                                    <textarea class="form-control" id="product_description" name="product_description" rows="3">{{ $product->product_description }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                                </div>

                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
                                </div>

                                <div class="form-group">
                                    <label for="image">Product Image</label>
                                    @if ($product->image)
                                        <p>Current Image:</p>
                                        <img src="{{ asset('storage/images/' . $product->image) }}" alt="Product Image" style="max-width: 200px; height: auto;">
                                    @endif
                                    <input type="file" class="form-control-file" id="image" name="image">
                                </div>

                                <div class="form-group">
                                    <label for="subcategory_id">Subcategory</label>
                                    <select class="form-control" id="subcategory_id" name="subcategory_id">
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                                {{ $subcategory->subCategory_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Product</button>
                            </form>
    </div>

                  </div>
                </div>
              </div>
</div>
