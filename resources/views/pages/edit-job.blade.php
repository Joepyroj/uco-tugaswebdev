<!-- resources/views/pages/edit-job.blade.php -->

@extends('layouts.app')

@section('content')
    <x-navbar />

    <div class="main-content">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Edit Job
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('update-job', $job) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="job_title">Job Title:</label>
                                    <input type="text" class="form-control" id="job_title" name="job_title" value="{{ $job->job_title }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Company Name:</label>
                                    <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $job->company_name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="salary">Salary:</label>
                                    <input type="number" step="0.01" class="form-control" id="salary" name="salary" value="{{ $job->salary }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="location">Location:</label>
                                    <input type="text" class="form-control" id="location" name="location" value="{{ $job->location }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="job_description">Job Description:</label>
                                    <textarea class="form-control" id="job_description" name="job_description" rows="3" required>{{ $job->job_description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="saved" {{ $job->status == 'saved' ? 'selected' : '' }}>Saved</option>
                                        <option value="applied" {{ $job->status == 'applied' ? 'selected' : '' }}>Applied</option>
                                        <option value="interview" {{ $job->status == 'interview' ? 'selected' : '' }}>Interview</option>
                                        <option value="offered" {{ $job->status == 'offered' ? 'selected' : '' }}>Offered</option>
                                        <option value="rejected" {{ $job->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Job</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
