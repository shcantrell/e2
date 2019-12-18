@extends('templates.master')

@section('title')
Add a Product
@endsection

@section('content')

<H2>Add a Product</H2>

<form method='POST' id='new-product' action='/products/show-new-product'>
    <div class='form-group'>
        <label for='name'>Name</label>
        <input type='text' class="form-control" name='name'>
    </div>

    <div class='form-group'>
        <label for='description'>Description</label>
        <textarea name='description' class='form-control'></textarea>
    </div>

    <div class='form-group'>
        <label for='price'>Price</label>
        <input type='number' class="form-control" name='price'>
    </div>

    <div class='form-group'>
        <label for='available'>Available Quantity</label>
        <input type='number' class="form-control" name='available'>
    </div>

    <div class='form-group'>
        <label for='weight'>Weight</label>
        <input type='number' class="form-control" name='weight'>
    </div>

    <div class='form-group'>
        <label for='perishable'>Perishable (Use "0" for non-perishable and "1" for perishable.)</label>
        <input type='number' class="form-control" name='perishable' min='0' max='1'>
    </div>

    <button type='submit' class='btn btn-primary'>Add New Product</button>
</form>


@endsection