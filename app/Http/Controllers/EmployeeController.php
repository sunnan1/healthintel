<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\Section;
use App\Models\Setting;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showEmployeeList() {
        $departments = Department::all();
        $designations = Designation::all();
        $setting = Setting::whereIn('type',['GENDER','MARITAL_STATUS','BLOOD_GROUP','RELIGION'])->get();
        $pageData = [
            'main' => 'Human Resource',
            'title' => 'Employee List',
            'department' => $departments,
            'designation' => $designations,
            'setting' => $setting,
        ];
        return view('admin.listings.employees' , compact('pageData'));
    }

    public function saveEmployee(Request $request)
    {
        dd($request->all());
    }
}
