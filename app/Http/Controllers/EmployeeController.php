<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create()
    {
        $data = Company::all();
        return view('component.addemployee',[
            "companies" => $data,
        ]);
    }

    public function store()
    {
        $validator = validator(request()->all(),[
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "photo" => "required",
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $name = request()->file('photo')->getClientOriginalName();
        request()->file('photo')->storeAs('public/employee/', $name);

        $employee = new Employee;
        $employee->name = request()->name;
        $employee->email = request()->email;
        $employee->phone = request()->phone;
        $employee->photo = $name;
        $employee->company_id = request()->company_id;
        $employee->save();

        return redirect('/admin');
    }

    public function view()
    {
        $data = Employee::all();

        return view('employee.employeeview',[
            "employees" => $data
        ]);
    }

    public function delete($id)
    {
        $data = Employee::find($id);
        $data->delete();

        return back();
    }

    public function detail($id)
    {
        $data = Employee::find($id);

        return view('employee.employeedetail', [
            "employee" => $data,
        ]);
    }

    public function update($id)
    {
        $data = Employee::find($id);

        return view('employee.employeeupdate',[
            "employee" => $data,
        ]);
    }

    public function edited($id)
    {
        $validator = validator(request()->all(),[
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "photo" => "required",
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $name = request()->file('photo')->getClientOriginalName();
        request()->file('photo')->storeAs('public/employee/', $name);

        $employee = Employee::find($id);
        $employee->name = request()->name;
        $employee->email = request()->email;
        $employee->photo = $name;
        // $employee->company_id = request()->company_id;
        $employee->phone = request()->phone;
        $employee->save();

        return redirect('/admin');
    }
}
