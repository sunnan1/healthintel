<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showEmployeeList() {
        $departments = Department::all();
        $pageData = [
            'main' => 'Human Resource',
            'title' => 'Employee List',
            'department' => $departments
        ];
        return view('admin.listings.employees' , compact('pageData'));
    }
}
