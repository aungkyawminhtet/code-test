@extends('layouts.app')
@section('content')
    <div class="container" style="max-width: 600px">

        @if($errors->any())
            <div class="alert alert-warning">
                @foreach($errors->all() as $err)
                    {{ $err }}
                @endforeach
            </div>
        @endif

        <h2>Employee Update</h2>
        <img src="{{ asset('storage/employee/'. $employee->photo) }}" alt="Employee Profile" width="200">

        <form method="POST" enctype = "multipart/form-data" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="">Employee Name</label>
                <input type="text" name="name" value="{{$employee->name}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Employee Email</label>
                <input type="text" name="email" value="{{$employee->email}}" class="form-control">
            </div>
            <div class="mb-4">
                <label for="">Employee phone</label>
                <input type="text" name="phone" value="{{$employee->phone}}" class="form-control">
            </div>
            <div class="mb-4">
                <label for="">Employee Profile</label>
                <input type="file" name="photo" class="form-control" value="{{$employee->photo}}">
            </div>
            <button class="btn btn-primary">Update Data</button>
        </form>
    </div>
@endsection
