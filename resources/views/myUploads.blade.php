@extends('layouts.app')
@section('content')
    <div class="container main-table">
        <div class="box">
            <div class="title">
                My Uploaded Cars
            </div>
            <form action="/search" method="GET">
                <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search by Car Manufacturer">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-success">Search</button>
                    </span>
                </div>
            </form>
            @if (count ($myCars) > 0)
                <table class="table is-striped is-hoverable" id="carTable">
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
                    @foreach ($myCars as $c)
                        <tr>
                            <td>{{ $c -> brand }}</td>
                            <td>{{ $c -> model }}</td>
                            <td>{{ $c -> year }}</td>
                            <td>{{ $c -> created_at -> format ('D jS F') }}</td>
                            <td>{{ $c -> updated_at -> format ('D jS F') }}</td>
                            <td>{{ $c -> Likes }}</td>

                            </td>
                            <td>
                                <a class="button" href="/editDetails/{{ $c -> id }}/edit/">
                                    <ion-icon name="create"></ion-icon>
                                </a>
                            </td>
                            <td>
                                <a class="button" href="/editDetails/{{ $c -> id }}/delete/">
                                    <ion-icon name="trash"></ion-icon>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $myCars -> links () }}
            @else
                <div class="notification is-info">
                    <p>
                        We need more Cars!
                    </p>
                </div>
            @endif
            <br/>
            <br/>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#carTable').DataTable();
        } );
    </script>
@endsection
