<div class="shop-section container-fluid">
    <a class="btn btn-primary" href="{{ url('/$d_3c0mm3rc3/shop/category/add') }}">Add Category</a>
    <br>
    <br>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-md-3 container">
                <i style="font-size: 50px" class="{{ $category->icon }}"></i>
                <br>
                <p>{{ $category->title }}</p>
            </div> 
        @endforeach
    </div>
    <br>

    <div class="card">
        <h5 class="card-header">Items</h5>
        <div class="card-body">
            <div class="row">
                <a class="btn btn-primary" href="{{ url('/$d_3c0mm3rc3/shop/item/add') }}">Add Item</a>
                
            </div>
        </div>
    </div>

</div>