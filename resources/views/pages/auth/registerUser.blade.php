@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'User Register')

@section('content')
<!-- begin register -->
<div class="login login-with-news-feed" style="height: 100vh;">
    <!-- begin news-feed -->
    <div class="news-feed" style="height: 100%; background-image: url(/images/umpsa.jpeg); background-size: cover; background-position: center;">
        <div class="news-caption">
            <h4 class="caption-title"><b>PharmaClick</b> – Healthcare at Your Fingertips</h4>
            <p>
                Create an account to access medical services, order medications, and book appointments with Pusat Kesihatan Universiti, UMPSA.
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

        <!-- begin register-content -->
        <div class="login-content">
            <form action="{{ route('register') }}" method="POST" class="margin-bottom-0">
                @csrf
                <div class="form-group m-b-15">
                    <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}" required />
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group m-b-15">
                    <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required />
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group m-b-15">
                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required />
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group m-b-15">
                    <input type="password" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required />
                    @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Add Role Field -->
                <div class="form-group m-b-15">
                    <select class="form-control form-control-lg @error('role') is-invalid @enderror" name="role" required>
                        <option value="">Select Role</option>
                        <option value="doctor" {{ old('role') == 'doctor' ? 'selected' : '' }}>Doctor</option>
                        <option value="patient" {{ old('role') == 'patient' ? 'selected' : '' }}>Patient</option>
                        <option value="dentist" {{ old('role') == 'dentist' ? 'selected' : '' }}>Dentist</option>
                    </select>
                    @error('role')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Add Phone Field -->
                <div class="form-group m-b-15">
                    <input type="text" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required />
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Add Matric ID Field -->
                <div class="form-group m-b-15">
                    <input type="text" class="form-control form-control-lg @error('matric_id') is-invalid @enderror" name="matric_id" placeholder="Matric ID" value="{{ old('matric_id') }}" required />
                    @error('matric_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="checkbox checkbox-css m-b-30">
                    <input type="checkbox" id="terms_checkbox" value="" />
                    <label for="terms_checkbox">
                        I agree to the <a href="#">Terms & Conditions</a>
                    </label>
                </div>

                <div class="register-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">Register</button>
                </div>

                <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                    Already a member? Click <a href="{{ route('login') }}">here</a> to login.
                </div>
                <hr />
                <p class="text-center text-grey-darker mb-0">
                    &copy;2025 PharmaClick. All Rights Reserved.
                </p>
            </form>
        </div>
        <!-- end register-content -->
    </div>
    <!-- end right-content -->
</div>
<!-- end register -->
@endsection