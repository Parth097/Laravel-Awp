@extends('layouts.app')

@section('content')

    <div class="container main-table">
        <div class="box">
            <div class="title">
                Upload Your Car Details
            </div>
            <div class="text-body">
                Here you can add your own cars for others to see. Click on the '+' at the bottom of the page to get
                started.
            </div>
            <br>
            <br>
            @if (count ($upload) > 0)
                <table class="table is-striped is-hoverable">
                    <thead>
                    <tr>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Likes</th>
                    </tr>

                    </thead>

                    <tbody>
                    @foreach ($upload as $c)
                        <tr>
                            <td>{{ $c -> brand }}</td>
                            <td>{{ $c -> model }}</td>
                            <td>{{ $c -> year }}</td>
                            <td>{{ $c -> created_at -> format ('D jS F') }}</td>
                            <td>{{ $c -> updated_at -> format ('D jS F') }}</td>
                            <td>{{ $c -> Likes }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <td>
                    <a class="button" href="/add">
                        <ion-icon name="add"></ion-icon>
                    </a>
                </td>
                <br>
                <br>
                {{ $upload -> links () }}
            @else
                <div class="notification is-info">
                    <p>
                        We need more Cars!
                    </p>
                </div>
            @endif
            <br/>
            <td>
                <a class="button" href="/add">
                    <ion-icon name="add"></ion-icon>
                </a>
            </td>
            <br>
            <br>
            {{ $upload -> links () }}
        </div>
    </div>

@endsection
