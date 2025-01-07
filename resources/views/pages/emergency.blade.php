@extends('layouts.default')

@section('title', 'Emergency')

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Emergency</a></li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Emergency <small>Quick access to emergency services</small></h1>
    <!-- end page-header -->

    <!-- Emergency Services Section -->
    <div class="panel panel-inverse">
        <div class="panel-heading">
            <h4 class="panel-title">Emergency Services</h4>
            <div class="panel-heading-btn">
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <p>Access emergency medical services quickly and efficiently.</p>
            <a href="{{ route('emergency.index') }}" class="btn btn-danger">Get Emergency Help</a>
        </div>
    </div>
    <!-- end Emergency Services Section -->
@endsection