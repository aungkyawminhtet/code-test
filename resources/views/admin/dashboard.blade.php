@extends("layouts.app")
@section('content')
    <div class="container-fluid">
        <div class="row g-1">
            <div class="col-2 bg-light">
                <div class="list-group text-center text-lg-start">
                    <span class="list-group-item disabled d-none d-lg-block">
                        CONTROLS
                    </span>

                    <a href="#" class="list-group-item list-group-item-action active">
                        <i class="fas fa-home"></i>
                        Dashboard
                    </a>

                    <a href="{{url('/companies/view')}}" class="list-group-item list-group-item-action">
                        <span class="d-none d-lg-block">
                            Company Lists
                        </span>
                    </a>
                    <a href="{{url('/employees/view')}}" class="list-group-item list-group-item-action">
                        <span class="d-none d-lg-block">
                            Employee Lists
                        </span>
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
            <main class="col-10 bg-secondary p-4">
                <div class="row">
                    <div class="col">
                        <h2 class="text-white-50">Company Lists</h2>
                        <div class="card" style="height: 200px">
                            <div class="card-body text-center">
                                <h1 class="card-title">{{ count($companies) }}</h1>
                                <span>Company Number</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h2 class="text-white-50">Employee Lists</h2>
                        <div class="card" style="height: 200px">
                            <div class="card-body text-center">
                                <h1 class="card-title">{{ count($employees) }}</h1>
                                <span>Employee Number</span>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
