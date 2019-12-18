@extends('templates.master')

@section('title')
SHOW NEW PRODUCT PAGE
@endsection

@section('content')

<H2>THIS IS A NEW PRODUCT</H2>

<p><strong>Product Name:</strong> {{ $name}} </p>
<p><strong>Description:</strong> {{ $description}} </p>
<p><strong>Price:</strong> ${{ $price }}.00 </p>
<p><strong>Availability:</strong> {{ $available }} </p>
<p><strong>Weight:</strong> {{ $weight }} </p>

<p><strong>Perishable Item?:&nbsp </strong>
    @if($perishable == 0)
    Not a perishable.
    @else
    Is a perishable.
    @endif
</p>

@endsection