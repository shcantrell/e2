@extends('templates.master')

@section('title')
Day Plan
@endsection

@section('content')


<h2>Meal Plan: {{ $weekday }}, {{ $month }}/{{ $day }}/{{ $year }}</h2>

@if(isset($foodinput))
Food Item: {{ $fooditem }} Calories {{ $calories}}
@endif


<form method='POST' action='/plans/add-food-item'>

    <p>
        <label for='foodItem'>Food Item:</label>
        <input class='foodItem' type='text' name='foodItem'>

        <label for='calories'>Calories:</label>
        <input type='text' name='calories'>
    </p>

    <button>Add the Food Item</button>
</form>


@endsection