@extends('layouts.master')

@section('title')
Welcome!
@endsection

@section('content')
    @include('includes.message-block')
    <h1>Welcome to my Social Media!</h1>
    <h5>Login or Signup Below to share your thoughts!</h5>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2>Sign Up</h2>
            <p>Don't have an account? Sign Up here...</p>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email')?'is-invalid':'' }}">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
        <div class="col-6">
            <h2>Sign In</h2>
            <p>Have an account? Sign In here...</p>
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    
    </div>
@endsection