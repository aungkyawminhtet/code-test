@extends("layouts.app")
@section('content')
    <div class="container-fluid">
        <div class="row g-1">
            <div class="col-2 bg-light">
                <div class="list-group text-center text-lg-start">
                    <span class="list-group-item disabled d-none d-lg-block">CONTROLS</span>
                    <a href="{{url('/admin')}}" class="list-group-item list-group-item-action">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>
                    <a href="{{url('/companies/view')}}" class="list-group-item list-group-item-action active">
                        <span class="d-none d-lg-block">Company Lists</span>
                    </a>
                    <a href="{{url('/employees/view')}}" class="list-group-item list-group-item-action">
                        <span class="d-none d-lg-block">Employee Lists</span>
                    </a>
                </div>
                <div class="list-group mt-4 text-center text-lg-start">
                    <span class="list-group-item disabled">ACTION</span>
                    <a href="{{url('/companies/add')}}" class="list-group-item list-group-item-action">
                        New Company
                    </a>
                    <a href="{{url('/employees/add')}}" class="list-group-item list-group-item-action">
                        New Employee
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Setting
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        Help
                    </a>
                </div>
            </div>
            <main class="col-10 p-4" style="background-color: rgb(206, 205, 205)">
                 <table class="table table-dark table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Company Name</th>
                        <th>Company Email</th>
                        <th>Company Web Link</th>
                        <th>Action</th>
                    </tr>
                    @foreach($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->website}}</td>
                        <td>
                            <a href="{{url("/companies/update/{$company->id}")}}" class="btn btn-info btn-sm">Update</a>
                            <a href="{{url("/companies/detail/{$company->id}")}}" class="btn btn-primary btn-sm ">Detail &raquo;</a>
                            <a href="{{url("/companies/delete/{$company->id}")}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                 </table>
            </main>
        </div>
    </div>
@endsection
