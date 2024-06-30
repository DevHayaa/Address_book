@include('cssjss')
<!-- Quick View Modal -->
  <div class="modal fade" id="quickViewModal" tabindex="-1" role="dialog" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quickViewModalLabel">Product Quick View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="quick-view-body">
                    <!-- Product details will be loaded here dynamically -->
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.quick-view').click(function(e){
                e.preventDefault();
                var productId = $(this).data('id');
                $.ajax({
                    url: '/quick-view/' + productId,
                    method: 'GET',
                    success: function(data){
                        $('#quick-view-body').html(data);
                        $('#quickViewModal').modal('show');
                    }
                });
            });
        });
    </script>

<div class="row">
    <div class="col-md-6">
        <img src="" class="img-fluid" alt="">
    </div>
    <div class="col-md-6">
        <h2>{{ $product->product_name }}</h2>
        <p>{{ $product->product_description }}</p>
        <p>Price: ${{ $product->price }}</p>
        <p>Quantity: {{ $product->quantity }}</p>
        <p>Subcategory: {{ $product->subCategory->subCategory_name }}</p>
        <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
</div>
