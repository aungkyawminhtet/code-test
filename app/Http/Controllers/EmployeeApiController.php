<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeApiController extends Controller
{

    public function index()
    {
        return Employee::all();
    }


    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        if(!$name and !$email) return response(["msg" => "name and email is required"], 400);

        $employee = new Employee;
        $employee->name = $name;
        $employee->email = $email;
        $employee->company_id = $request->company_id;
        $employee->photo = $request->photo;
        $employee->phone = $request->phone;
        $employee->save();

        return $employee;
    }


    public function show(Employee $employee)
    {
        return $employee;
    }


    public function update(Request $request, Employee $employee)
    {
        $name = $request->name;
        $email = $request->email;
        if(!$name and !$email) return response(["msg" => "name and email is required"], 400);

        $employee = new Employee;
        $employee->name = $name;
        $employee->email = $email;
        $employee->photo = $request->photo;
        $employee->phone = $request->phone;
        $employee->save();

        return $employee;
    }


    public function destroy(Employee $employee)
    {
        $employee->delete();
        return $employee;
    }
}
