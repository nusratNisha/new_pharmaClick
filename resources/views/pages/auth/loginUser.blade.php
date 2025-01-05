@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'User Login')

@section('content')
<!-- begin login -->
<div class="login login-with-news-feed" style="height: 100vh;">
    <!-- begin news-feed -->
    <div class="news-feed" style="height: 100%; background-image: url(/images/umpsa.jpeg); background-size: cover; background-position: center;">
        <div class="news-caption">
            <h4 class="caption-title"><b>PharmaClick</b> – Healthcare at Your Fingertips</h4>
            <p>
                Access medical services, order medications, and book appointments with Pusat Kesihatan Universiti, UMPSA.
            </p>
        </div>
    </div>
    <!-- end news-feed -->

    <!-- begin right-content -->
    <div class="right-content">
        <!-- begin login-header -->
        <div class="login-header">
            <div class="brand">
                <img src="/images/healthCareLogo.png" alt="Logo" style="width: 50px; height: auto;" /> <b>Pharma</b>Click
                <small>Your health is one click away</small>
            </div>
        </div>
        <!-- end login-header -->

        <!-- begin login-content -->
        <div class="login-content">
            <form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
                @csrf
                <div class="form-group m-b-15">
                    <input type="text" class="form-control form-control-lg @error('matric_id') is-invalid @enderror" name="matric_id" placeholder="Matric ID" value="{{ old('matric_id') }}" required />
                    @error('matric_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group m-b-15">
                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required />
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="login-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                </div>

                <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                    Don't have an account? Click <a href="{{ route('register') }}">here</a> to register.
                </div>
                <hr />
                <p class="text-center text-grey-darker mb-0">
                    &copy;2025 PharmaClick. All Rights Reserved.
                </p>
            </form>
        </div>
        <!-- end login-content -->
    </div>
    <!-- end right-content -->
</div>
<!-- end login -->
@endsection