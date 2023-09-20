@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- <div class="container" style="max-width: 600px">
        <h2 class="text-center mb-2">Your Profile</h2>
        <ul class="list-group mb-3">
            <li class="list-group-item">Name : Aung Kyaw min Htet</li>
            <li class="list-group-item">Email : akmh@gmail.com</li>
            <li class="list-group-item">website : akmh@gmail.com</li>
        </ul>
        <a href="{{url('/admin')}}" class="btn btn-primary">Admin Pannel</a>
    </div> --}}
@endsection
