@extends('layouts.default')

@section('title', 'Medical Services')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Medical Services</a></li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Medical Services <small>Your health is our priority</small></h1>
    <!-- end page-header -->

    <!-- Appointments Section -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Appointments</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <!-- Add content for appointments here -->
            <p>Schedule and manage your medical appointments with ease.</p>
            <a href="{{ route('appointments.index') }}" class="btn btn-primary">View Appointments</a>
        </div>
    </div>
    <!-- end Appointments Section -->

    <!-- Order Medicine Section -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Order Medicine</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <!-- Add content for order medicine here -->
            <p>Order your prescription medicines online and have them delivered to your doorstep.</p>
            <a href="{{ route('medicine.order') }}" class="btn btn-success">Order Medicine</a>
        </div>
    </div>
    <!-- end Order Medicine Section -->

@endsection
