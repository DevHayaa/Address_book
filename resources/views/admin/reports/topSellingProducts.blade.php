
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
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Best selling product</li>
        </ul>
        <a href="{{ route('admin.topSellingProductsPdf') }}" class="btn btn-primary">Generate PDF</a>
    </div>
    <section class="no-padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="block margin-bottom-sm">
                        <div class="title"><strong>Top 10 Best Selling Products</strong></div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Subcategory</th>
                                <th>Sales Count</th>
                            </tr>
                                </thead>
                                                <tbody>
                            @foreach($topProducts as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->subCategory->subCategory_name }}</td>
                                <td>{{ $product->sales_count }}</td>
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

