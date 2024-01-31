<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <x-navbar />

    <div class="main-content">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


        @if ($jobCounts)
        <div class="row mt-4">
            @foreach ($jobCounts as $status => $count)
                <div class="col-md-4">
                    <div class="card {{ getStatusColorClass($status) }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ ucfirst($status) }} Jobs</h5>
                            <p class="card-text">{{ $count }} jobs</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif


        @yield('dashboard-content')
    </div>
@endsection

@php
    function getStatusColorClass($status) {
        switch ($status) {
            case 'saved':
                return 'bg-primary text-white';
            case 'applied':
                return 'bg-success text-white';
            case 'interview':
                return 'bg-warning text-dark';
            case 'offered':
                return 'bg-info text-white';
            case 'rejected':
                return 'bg-danger text-white';
            default:
                return '';
        }
    }
@endphp
