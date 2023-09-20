@extends('layouts.app')
@section('content')
    <div class="container" style="max-width: 600px">

        <h2>Company Detail</h2>

        <img src="{{ asset('storage/company/'. $company->photo)}}" alt="Profile image" width="200">

        <ul class="list-group mt-3">
            <li class="list-group-item"><b>Company Name : </b>{{$company->name}}</li>
            <li class="list-group-item"><b>Company Email : </b>{{$company->email}}</li>
            <li class="list-group-item"><b>Company Website : </b><a href="#">{{$company->website}}</a></li>
        </ul>

        @foreach($company->employees as $ak)
        <h3 class="mt-4">Employees List in This Company</h3>
        <ul class="list-group">
            <li class="list-group-item"><b>Employee Name : </b>{{ $ak->name }}</li>
        </ul>
        @endforeach
    </div>
@endsection
