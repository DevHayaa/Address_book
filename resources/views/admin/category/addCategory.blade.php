
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
            <li class="breadcrumb-item"><a href="{{route('category')}}">Category</a></li>
            <li class="breadcrumb-item active">AddCategory</li>
          </ul>
        </div>
        <div class="col-lg-10">
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
