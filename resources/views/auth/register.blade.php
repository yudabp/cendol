@extends('layouts.auth')

@section('title', 'Register Form')

@section('content')
<form class="splash-container" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="card shadow">
        <div class="card-header">
            <h3 class="mb-1">Registration Form</h3>
            <p>Please enter your user information.</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <input class="form-control form-control-lg @error('name') is-invalid @enderror" type="text" name="name" placeholder="Your name" autocomplete="off" value="{{ old('name') }}" @error('name') autofocus @enderror>

                @error('name')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" placeholder="Your username" autocomplete="off" value="{{ old('username') }}" @error('username') autofocus @enderror>

                @error('username')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-mail Address" autocomplete="off" value="{{ old('email') }}" @error('email') autofocus @enderror>

                @error('email')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group">
                <input class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" type="password" placeholder="Choose a password" @error('password') autofocus @enderror>

                @error('password')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-lg" placeholder="Confirmez le mot de passe" required>
            </div>
            <div class="form-group pt-1">
                <button class="btn btn-block btn-primary" type="submit">Register my account</button>
            </div>
            <p>Already a member ?<a href="{{ route('login') }}" class="text-secondary">Log in here.</a></p>
        </div>
    </div>
    <style>
        body {
             background-color: #DA70D6;
             text-align:center;
            }
    </style>
    </head>
</form>
@endsection