@extends('layouts.app')

@section('content')
    <div class="sub-title m-b-md">
        Upload Details
    </div>
    <form action="/editDetails/{{ $myUploads -> id }}/edit/" method="POST">
        <fieldset>
            @csrf
            <label>Type:</label>
            <input class="input" type="text" value="{{ $myUploads -> type }}">
            <label>Fuel</label>
            <input class="input" type="text" name="type" id="type" value="{{ $myUploads -> fuel }}" autofocus>
            <label>Brand:</label>
            <input class="input" type="text" name="brand" id="brand" value="{{ $myUploads -> brand }}" autofocus>
            <label>Model:</label>
            <input class="input" type="text" name="model" id="model" value="{{ $myUploads -> model }}" autofocus>
            <label>Year:</label>
            <input class="input" type="text" name="year" id="year" value="{{ $myUploads -> year }}" autofocus>
            <br>
            <br>
            <button type="submit">Save Changes</button>
            <a class="button" href="/editDetails">Back</a>
        </fieldset>
    </form>
@endsection
