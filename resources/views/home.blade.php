@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <h5><strong>Name:</strong></h5>
                    <p>{{Auth::user()->name}}</p>
                    <br>
                    <h5><strong>Email:</strong></h5>
                    <p>{{Auth::user()->email}}</p>
                    <br>
                    <h5><strong>Password:</strong></h5>
                    <p>********</p>
                    <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
