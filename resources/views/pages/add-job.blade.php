<!-- resources/views/pages/add-job.blade.php -->

@extends('dashboard')

@section('dashboard-content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Add Job
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('add-job') }}">
                            @csrf
                            <div class="form-group">
                                <label for="job_title">Job Title:</label>
                                <input type="text" class="form-control" id="job_title" name="job_title" required>
                            </div>
                            <div class="form-group">
                                <label for="company_name">Company Name:</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" required>
                            </div>
                            <div class="form-group">
                                <label for="salary">Salary:</label>
                                <input type="number" step="0.01" class="form-control" id="salary" name="salary" required>
                            </div>
                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" id="location" name="location" required>
                            </div>
                            <div class="form-group">
                                <label for="job_description">Job Description:</label>
                                <textarea class="form-control" id="job_description" name="job_description" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="saved">Saved</option>
                                    <option value="applied">Applied</option>
                                    <option value="interview">Interview</option>
                                    <option value="offered">Offered</option>
                                    <option value="rejected">Rejected</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
