<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyApiController extends Controller
{

    public function index()
    {
        return Company::all();
    }


    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        if(!$name and !$email) return response(["msg" => "name and email is required"], 400);

        $company = new Company;
        $company->name = $name;
        $company->email = $email;
        $company->photo = $request->photo;
        $company->website = $request->website;

        $company->save();
        return $company;
    }

    public function show(Company $company)
    {
        return $company;
    }


    public function update(Request $request, Company $company)
    {
        $name = $request->name;
        $email = $request->email;
        if(!$name and !$email) return response(["msg" => "name and email is required"], 400);

        $company = new Company;
        $company->name = $name;
        $company->email = $email;
        $company->photo = $request->photo;
        $company->website = $request->website;

        $company->save();
        return $company;
    }


    public function destroy(Company $company)
    {
        $company->delete();
        return $company;
    }
}
