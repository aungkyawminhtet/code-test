@extends('layouts.app')

@section('content')

    <div class="container" style="max-width: 600px">
        <h2 class="text-center mb-2">Your Profile</h2>
        <ul class="list-group mb-3">

            <form class="input-group my-3" method="POST" enctype = "multipart/form-data">
                <input type="file" name="photo" class="form-control">
                <button class="btn btn-secondary float-end">Upload</button>
            </form>

            <li class="list-group-item">Name : Aung Kyaw min Htet</li>
            <li class="list-group-item">Email : akmh@gmail.com</li>
            <li class="list-group-item">website : akmh@gmail.com</li>
        </ul>
        <a href="{{url('/admin')}}" class="btn btn-primary">Admin Pannel</a>
    </div>

@endsection
