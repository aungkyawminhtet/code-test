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

        <h2>Company Update</h2>
        <img src="{{ asset('storage/company/'. $company->photo)}}" alt="Profile image" width="200">
        <form method="POST" enctype = "multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Company Name</label>
                <input type="text" name="name" value="{{$company->name}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Company Email</label>
                <input type="text" name="email" value="{{$company->email}}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Company Website Link</label>
                <input type="text" name="website" value="{{$company->website}}" class="form-control">
            </div>
            <div class="mb-4">
                <label for="">Company Logo</label>
                <input type="file" name="photo" class="form-control" value="{{$company->photo}}">
            </div>
            <button class="btn btn-primary">Update Data</button>
        </form>
    </div>
@endsection
