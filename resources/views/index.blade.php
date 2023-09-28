@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="float-left">
                <h2>Students Form</h2>
            </div>
            <div class="float-right" style="margin-bottom: 10px;">
                <a class="btn btn-success" href="{{ url('create') }}">Create New Data</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th style="width: 50px;">No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Institution</th>
            <th>NRP</th>
            <th style="width: 50px;">GPA</th>
            <th style="width: 300px;">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $student->image }}" width="300px"></td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->institution }}</td>
            <td>{{ $student->nrp }}</td>
            <td>{{ $student->gpa }}</td>
            <td>
                <form action="{{ route('destroy', $student->id) }}" method="POST" class="">
                    <a href="{{ route('show', $student->id) }}" class="btn btn-info">Show</a>
                    {{-- <a href="" class="btn btn-primary">Edit</a> --}}
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>    
            </td>    
        </tr>            
        @endforeach
    </table>
    {!! $students->links() !!}
@endsection
