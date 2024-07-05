
<div>
    <h2>Search Results</h2>

    @if ($products->isEmpty())
        <p>No products found for your search.</p>
    @else
        @foreach ($products as $product)
            <div>
                <h3>{{ $product->product_name }}</h3>
                <p>{{ $product->product_description }}</p>
                <p>Price: ${{ $product->price }}</p>
                <!-- Add more details as needed -->
                <a href="{{ route('product.show', $product->id) }}">View Product</a>
            </div>
        @endforeach
    @endif
</div>
