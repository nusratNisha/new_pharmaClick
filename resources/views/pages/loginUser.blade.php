@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'User Login')

@section('content')
    <!-- begin login -->
    <div class="login login-with-news-feed" style="height: 100vh;">
        <!-- begin news-feed -->
        <div class="news-feed" style="height: 100%;">
            <div class="news-image" style="background-image: url(/images/umpsa.jpeg); height: 100%; background-size: cover; background-position: center;"></div>
            <div class="news-caption">
                <h4 class="caption-title"><b>PharmaClick</b> – Healthcare at Your Fingertips</h4>
                <p>
                    Sign in to access medical services, order medications, and book appointments with Pusat Kesihatan Universiti, UMPSA.
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
                <form action="{{ route('login.submit') }}" method="POST" class="margin-bottom-0">
                    @csrf
                    <div class="form-group m-b-15">
                        <input type="text" class="form-control form-control-lg" name="email" placeholder="Email Address" required />
                    </div>
                    <div class="form-group m-b-15">
                        <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" required />
                    </div>
                    <div class="checkbox checkbox-css m-b-30">
                        <input type="checkbox" id="remember_me_checkbox" value="" />
                        <label for="remember_me_checkbox">
                            Remember Me
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                    </div>
                    <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                        Not a member yet? Click <a href="register_v3.html">here</a> to register.
                    </div>
                    <hr />
                    <p class="text-center text-grey-darker mb-0">
                        &copy;2025 PharmaClick. All Rights Reserved.
                    </p>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end right-container -->
    </div>
    <!-- end login -->
@endsection