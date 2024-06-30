@include('adminCssJs')
<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid d-flex">
            <a href="{{route('addCategory')}}" class="btn btn-success">Add Category</a>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Category Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Category Name</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $data)
                        <tr>
                          <th scope="row"></th>
                          <td>{{$data->category_name}}</td>
                          <td>{{$data->category_description}}</td>
                          <td><a href="{{route('editCategory',$data->id)}}" class="btn btn-primary">Edit</a>
                          <a href="{{route('deleteCategory',$data->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>

 