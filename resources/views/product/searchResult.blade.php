<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <title>Search Product</title>
    @include('../cssjss')
    <style>
        .search-results {
    margin-top: 20px;
}

.product-card {
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.product-card h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.product-card p {
    line-height: 1.6;
    margin-bottom: 8px;
}

.product-card a {
    display: inline-block;
    background-color: #ff8c94;
    color: #fff;
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.product-card a:hover {
    background-color: #e85c66;
}

@media (max-width: 768px) {
    .product-card {
        padding: 10px;
    }

    .product-card h3 {
        font-size: 1.3em;
    }

    .product-card a {
        padding: 6px 12px;
    }
}

    </style>
</head>
    @include('../navigation.header')
    <div class="search-results">
    <h2>Search Results</h2>

    @if ($products->isEmpty())
        <p>No products found for your search.</p>
    @else
        @foreach ($products as $product)
            <div class="product-card">
            <img class="img-fluid" height="150" width="150" src="{{ asset('storage/images/' . $product->image) }}" alt="image" title="product">
                <h3>{{ $product->product_name }}</h3>
                <p>{{ $product->product_description }}</p>
                <p><strong>Price:</strong> ${{ $product->price }}</p>
                <!-- Add more details as needed -->
                <a href="{{ route('product.show', $product->id) }}">View Product</a>
            </div>
        @endforeach
    @endif
</div>

