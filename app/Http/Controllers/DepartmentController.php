<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function showDepartmentList() {
        $pageData = [
            'main' => 'Human Resource',
            'title' => 'Department List'
        ];
        return view('admin.listings.departments' , compact('pageData'));
    }
}
