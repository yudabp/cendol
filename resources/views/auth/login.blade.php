@extends('layouts.auth')

@section('title', 'Login Form')

@section('content')
<form class="splash-container" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="card shadow">
        <div class="card-header">
            <h3 class="mb-1">Login form</h3>
            <p>Please enter your user information to login.</p>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
            <div class="form-group">
                <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" placeholder="User name" autocomplete="off" value="{{ old('username') }}" @error('username') autofocus @enderror>

                @error('username')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" type="password" placeholder="Enter your password" @error('password') autofocus @enderror>

                @error('password')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group pt-1">
                <button class="btn btn-block btn-primary" type="submit">Log in</button>
            </div>
            {{-- <p>Already member? <a href="#" class="text-secondary">Log in here.</a></p> --}}
            <p> Don't have an account ?<a href="{{ route('register') }}" class="text-secondary">Register here</a></p>
        </div>
    </div>
    <style>
        body {
             background-color: #FF69B4;
             text-align:center;
            }
    </style>
    </head>
</form>
@endsection