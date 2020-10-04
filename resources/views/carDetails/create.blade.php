@extends('layouts.app')

@section ('content')
    <div class="title m-b-md">
        Upload Details
    </div>
    <form action="/add/" method="POST">
        <fieldset>
            @csrf
            <label>User ID:</label>
            <input class="input" name="user_id" value="{{ Auth::user()->id }}" readonly>
            <label>User Name:</label>
            <input class="input" name="u_name" value="{{ Auth::user()->name }}" readonly>
            <label>Type:</label>
            <input class="input" type="text" name="type" placeholder="Enter car type here">
            <label>Fuel</label>
            <input class="input" type="text" name="fuel"  placeholder="Enter fuel type here">
            <label>Brand:</label>
            <input class="input" type="text" name="brand"  placeholder="Enter brand here">
            <label>Model:</label>
            <input class="input" type="text" name="model" placeholder="Enter car model here">
            <label>Year:</label>
            <input class="input" type="text" name="year"  placeholder="Enter year here">
            <br>
            <br>
            <button type="submit">Save Changes</button>
            <a class="button" href="/upload">Back</a>
        </fieldset>
    </form>
@endsection


