@extends('layouts.default')

@section('title', 'Counselling')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Counselling</a></li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Counselling <small>Professional support for your mental health</small></h1>
    <!-- end page-header -->

    <!-- Counselling Services Section -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Counselling Services</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <p>Get professional counselling services to support your mental health and well-being.</p>
            <a href="{{ route('counselling.index') }}" class="btn btn-primary">Get Counselling Help</a>
        </div>
    </div>
    <!-- end Counselling Services Section -->
@endsection