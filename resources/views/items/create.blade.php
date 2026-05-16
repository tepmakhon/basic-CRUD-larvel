@extends('layouts.app')

@section('content')

<div class="card-box">

<h3>➕ Add Import Item</h3>

<form method="POST" action="/items" enctype="multipart/form-data">
@csrf

<div class="row">
    <div class="col-md-6 mb-3">
        <label>Item Name</label>
        <input type="text" name="item_name" class="form-control" required>
    </div>

    <div class="col-md-6 mb-3">
        <label>Category</label>
        <input type="text" name="category" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Supplier</label>
        <input type="text" name="supplier" class="form-control">
    </div>

    <div class="col-md-3 mb-3">
        <label>Quantity</label>
        <input type="number" name="quantity" class="form-control">
    </div>

    <div class="col-md-3 mb-3">
        <label>Price</label>
        <input type="number" name="import_price" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Date</label>
        <input type="date" name="import_date" class="form-control">
    </div>

    <div class="col-md-6 mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
            <option>Pending</option>
            <option>Completed</option>
        </select>
    </div>

    <div class="col-md-12 mb-3">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
    </div>
</div>

<button class="btn btn-success">
    💾 Save Item
</button>

</form>

</div>

@endsection