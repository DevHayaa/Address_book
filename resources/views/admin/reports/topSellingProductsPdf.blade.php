<!DOCTYPE html>
<html>
<head>
    <title>Top 10 Best Selling Products</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Top 10 Best Selling Products</h2>
    <table>
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
</body>
</html>
