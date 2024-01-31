<!-- resources/views/pages/profile.blade.php -->

@extends('layouts.app')

@section('content')
    <x-navbar />

    <div class="main-content">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Profile</h5>
                <p class="card-text">First Name: {{ $user->first_name }}</p>
                <p class="card-text">Last Name: {{ $user->last_name }}</p>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Update Name</h5>
                <form method="POST" action="{{ route('update-name') }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Name</button>
                </form>
            </div>
        </div>
    </div>
@endsection
