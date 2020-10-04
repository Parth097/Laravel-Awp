@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
    <div class="title m-b-md">
        Car Specification
    </div>
    <table class="table is-striped">
        <tbody>
        <tr>
            <td>ID:</td>
            <td>{{ $viewDetails -> user_id }}</td>
        </tr>
        <tr>
            <td>User:</td>
            <td>{{ $viewDetails -> u_name }}</td>
        </tr>
        <tr>
            <td>Type:</td>
            <td>{{ $viewDetails -> type }}</td>
        </tr>
        <tr>
            <td>Fuel:</td>
            <td>{{ $viewDetails -> fuel }}</td>
        </tr>
        <tr>
            <td>Brand:</td>
            <td>{{ $viewDetails -> brand }}</td>
        </tr>
        <tr>
            <td>Model:</td>
            <td>{{ $viewDetails -> model }}</td>
        </tr>
        <tr>
            <td>Year:</td>
            <td>{{ $viewDetails -> year }}</td>
        </tr>
        </tbody>
    </table>
    <p>
        <a class="btn btn-primary" href="/carDetails">Back</a>
    </p>
    </div>
    </div>
@endsection
