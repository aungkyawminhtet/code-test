@extends('layouts.app')
@section('content')
    <div class="container" style="max-width: 600px">
        <h2>Employee Detail</h2>

        <img src="{{ asset('storage/employee/'. $employee->photo) }}" alt="Employee Profile" width="200">

        <ul class="list-group">
            <li class="list-group-item"><b>Employee Name : </b>{{$employee->name}}</li>
            <li class="list-group-item"><b>Employee Email : </b>{{$employee->email}}</li>
            <li class="list-group-item"><b>Employee Company : </b>{{$employee->company->website}}</li>
            <li class="list-group-item"><b>Employee Phone : </b>{{$employee->phone}}</li>
        </ul>
    </div>
@endsection
