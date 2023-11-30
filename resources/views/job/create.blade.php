@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Job</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-job') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Job Name</label>
                            <input type="text" name="job" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Job Description</label>
                            <input type="text" name="jobdescription" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Job</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection