@extends('app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Add New Product</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-primary" href="{{ url('/') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger mt-5">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mt-5">
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Institution:</strong>
                <input type="text" name="institution" class="form-control" placeholder="Institution">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NRP:</strong>
                <input type="text" name="nrp" class="form-control" placeholder="NRP">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>GPA:</strong>
                <input type="text" name="gpa" class="form-control" placeholder="GPA">
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="Image">
            </div>
        </div>
        <div class="col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success w-100 mt-5">Submit</button>
        </div>
    </div>
</form>
@endsection