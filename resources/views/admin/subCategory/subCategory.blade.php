
@include('cssjss')
<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid d-flex">
            <a href="{{route('addSubCategory')}}" class="btn btn-success">Add subCategory</a>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">subCategory</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>subCategory Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>subCategory Name</th>
                          <th>Description</th>
                          <th>Category</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $data)
                        <tr>
                          <th scope="row">1</th>
                          <td>{{$data->subCategory_name}}</td>
                          <td>{{$data->subCategory_description}}</td>
                          <td>{{ $data->category->category_name }}</td>
                          <td><a href="{{route('editSubCategory',$data->id)}}" class="btn btn-primary">Edit</a>
                          <a href="{{route('deleteSubCategory',$data->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                         @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>

 