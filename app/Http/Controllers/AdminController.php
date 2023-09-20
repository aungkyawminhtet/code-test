<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $company = Company::all();
        $employee = Employee::all();
        return view('admin.dashboard',[
            "companies" => $company,
            "employees" => $employee,
        ]);
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function create()
    {
        return view('component.addcompany');
    }

    public function store()
    {

        $validator = validator(request()->all(),[
            "name" => "required",
            "email" => "required",
            "website" => "required",
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $name = request()->file('photo')->getClientOriginalName();

        request()->file('photo')->storeAs('public/company/', $name);

        $company = new Company;
        $company->name = request()->name;
        $company->email = request()->email;
        $company->photo = $name;
        $company->website = request()->website;
        $company->save();

        return redirect('/admin');
    }

    public function view()
    {
        $data = Company::all();
        return view("company.companyview",[
            "companies" => $data,
        ]);
    }

    public function delete($id)
    {
        $data = Company::find($id);
        $data->delete();

        return back();
    }

    public function detail($id)
    {
        $data = Company::find($id);

        return view("company.companydetail",[
            "company" => $data,
        ]);
    }

    public function update($id)
    {
        $data = Company::find($id);

        return view("company.companyupdate",[
            "company" => $data,
        ]);
    }

    public function edited($id)
    {

        $validator = validator(request()->all(),[
            "name" => "required",
            "email" => "required",
            "website" => "required",
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $name = request()->file('photo')->getClientOriginalName();
        request()->file('photo')->storeAs('public/company/', $name);

        $company = Company::find($id);

        $company->name = request()->name;
        $company->email = request()->email;
        $company->photo = $name;
        $company->website = request()->website;
        $company->save();

        return redirect('/admin');

    }
}
