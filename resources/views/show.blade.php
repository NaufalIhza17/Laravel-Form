@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <h2>Show Students</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ url('/') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $students->name }}
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NRP:</strong>
                {{ $students->nrp }}
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>GPA:</strong>
                {{ $students->gpa }}
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/images/{{ $students->image }}" width="500px">
            </div>
        </div>
    </div>
@endsection