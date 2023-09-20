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
                    <a href="{{url('/companies/view')}}" class="list-group-item list-group-item-action">
                        <span class="d-none d-lg-block">Company Lists</span>
                    </a>
                    <a href="{{url('/employees/view')}}" class="list-group-item list-group-item-action">
                        <span class="d-none d-lg-block">Employee Lists</span>
                    </a>
                </div>
                <div class="list-group mt-4 text-center text-lg-start">
                    <span class="list-group-item disabled">ACTION</span>
                    <a href="{{url('/companies/add')}}" class="list-group-item list-group-item-action active">
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
            <main class="col-10 p-4" style="background: rgb(0, 101, 114)">
                <div class="container" style="max-width: 600px">

                    @if($errors->any())
                        <div class="alert alert-warning">
                            @foreach($errors->all() as $err)
                                {{ $err }}
                            @endforeach
                        </div>
                    @endif

                    <h2>Create New Company</h2>
                    <form method="POST" enctype = "multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <input type="text" name="name" placeholder="Enter your name" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="email" placeholder="Enter your Eamil" class="form-control">
                        </div>
                        <div class="mb-2">
                            <input type="text" name="website" placeholder="Enter your Website link" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <button class="btn btn-primary">Add Item</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
