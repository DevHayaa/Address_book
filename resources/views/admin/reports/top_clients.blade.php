
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>TopClient</title>
</head>
@include('adminCssJs')
<body>
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
            <li class="breadcrumb-item active">Top !0 Client</li>
        </ul>
        <a href="{{ route('admin.reports.top_clients_pdf') }}">Download PDF</a>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Total Spent</th>
                            </tr>
                                </thead>
                                 <tbody>
                                @foreach($topClients as $client)
                                <tr>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ number_format($client->total_spent, 2) }}</td>
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
</body>
</html>

