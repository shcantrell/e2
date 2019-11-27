@extends('templates.master')

@section('title')
Product Not Found
@endsection

@section('content')
<h2>Product {{ $id }} not found</h2>

<p>Uh oh - we were not able to find the product you were looking for.</p>
<a href='/products'>Check out our other products...</a>
@endsection