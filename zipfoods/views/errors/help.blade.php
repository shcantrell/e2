@extends('templates.master')

@section('title')
Product Not Found
@endsection

@section('content')
<div id='product-show'>
    <h2>Product 99 not found</h2>

    <p>Uh oh - we were not able to find the product you were looking for.</p>
    <a href='/products'>Check out our other prodcuts...</a>


    @endsection