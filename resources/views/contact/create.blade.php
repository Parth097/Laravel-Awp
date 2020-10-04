@extends('layouts.app')

@section('content')
    <div class="container main-table">
        <div class="box">
            <div class="title">
                Contact Us
            </div>

            <form action="/contact" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" placeholder="Firstname Lastname"
                           class="form-control">
                    <div>{{ $errors->first('name') }}</div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{old('email')}}" placeholder="Enter your email here"
                           class="form-control">
                    <div>{{ $errors->first('email') }}</div>
                </div>

                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message here"
                              class="form-control">{{old('message')}}</textarea>
                    <div>{{ $errors->first('message') }}</div>
                </div>

                @csrf

                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>

@endsection
