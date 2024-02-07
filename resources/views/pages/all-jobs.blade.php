@extends('layouts.app')

@section('content')
    <x-navbar />

    <div class="main-content">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mt-4">
            @foreach ($jobs as $job)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $job->job_title }}</h5>
                            <p class="card-text">{{ $job->company_name }}</p>
                            <p class="card-text">{{ $job->location }}</p>
                            <p class="card-text">Status: {{ $job->status }}</p> <!-- Assuming 'status' is the field in your Job model -->

                            <form action="{{ route('delete-job', $job) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('edit-job', $job) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 custom-pagination"  style="font-size: 14px;">
            {{ $jobs->links() }}
        </div>
    </div>
@endsection
