@extends('layouts.app')

@section('content')
    <div class="container main-table">
        <div class="box">
            <div class="title">
                Car Details
            </div>
            @if (count ($carDetails) > 0)
                <table class="table is-striped is-hoverable">
                    <thead>
                    <tr>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Likes</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($carDetails as $c)
                        <tr>
                            <td>{{ $c -> brand }}</td>
                            <td>{{ $c -> model }}</td>
                            <td>{{ $c -> year }}</td>
                            <td>{{ $c -> created_at -> format ('D jS F') }}</td>
                            <td>{{ $c -> updated_at -> format ('D jS F') }}</td>
                            <td>{{ $c -> Likes }}</td>
                            <td>
                                <a class="button"
                                   href="/carDetails/{{ $c -> id }}/like/">
                                    <ion-icon name="thumbs-up"></ion-icon>
                                </a>
                            </td>
                            <td>
                                <a class="button"
                                   href="/carDetails/{{ $c -> id }}/dislike/">
                                    <ion-icon name="thumbs-down"></ion-icon>
                                </a>
                            </td>
                            <td>
                                <a class="button" href="/carDetails/{{ $c -> id }}/">
                                    <ion-icon name="eye"></ion-icon>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $carDetails -> links () }}
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

@endsection
