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
            <li class="breadcrumb-item"><a href="{{route('subCategory')}}">subCategory</a></li>
            <li class="breadcrumb-item active">EditSubCategory</li>
          </ul>
        </div>
        <div class="col-lg-10">
                <div class="block">
                       <div class="block-body">
                       <form action="{{ route('updateSubCategory', $data->id) }}" method="post">
                        @csrf 
                        <div class="form-group">
                            <label class="form-control-label">subCategory Name</label>
                            <input type="text" name="subCategory" value="{{ $data->subCategory_name }}" placeholder="subCategory Name" class="form-control">
                        </div>
                        <div class="form-group">       
                            <label class="form-control-label">Description</label>
                            <input class="form-control" name="description" value="{{ $data->subCategory_description }}" id="description" placeholder="Description" rows="3"></input>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Category</label>
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $data->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">       
                            <input type="submit" value="Update" class="btn btn-primary">
                        </div>
                    </form>

                  </div>
                </div>
              </div>
</div>
