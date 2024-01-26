<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{    
    public function showEmployeeList() {
        $pageData = [
            'main' => 'Human Resource',
            'title' => 'Employee List'
        ];
        return view('admin.listings.employees' , compact('pageData'));
    }
}
