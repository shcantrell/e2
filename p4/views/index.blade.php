@extends('templates.master')

@section('title')
{{ $app->config('app.name') }}
@endsection

@section('content')

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<h2>Let's Start Planning</h2>

<form method='POST' action='/plans/initiate-plan'>
    <input type='hidden' name='date_id' value='{{ $date["id"] }}'>
    <p>
        <label for='inputMonth'>Day of Week:</label>
        <select name='weekday'>
            <option></option>
            <option value='Monday'>Monday</option>
            <option value='Tuesday'>Tuesday</option>
            <option value='Wednesday'>Wednesday</option>
            <option value='Thursday'>Thursday</option>
            <option value='Friday'>Friday</option>
            <option value='Saturday'>Saturday</option>
            <option value='Sunday'>Sunday</option>
        </select>

        <label for='inputMonth'>Month:</label>
        <input class='dateBox' type='number' name='month' placeholder='mm'>

        <label for='inputMonth'>Day:</label>
        <input class='dateBox' type='number' name='day' placeholder='dd'>

        <label for='inputMonth'>Year:</label>
        <input class='dateBox' type='number' name='year' placeholder='yyyy'>
    </p>


    <button>Plan this Day's Meal</button>
</form>
@endsection