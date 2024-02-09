<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //
    public function showSectionList() {
        $departments = Department::all();
        $pageData = [
            'main' => 'Human Resource',
            'title' => 'Section List',
            'department' => $departments
        ];
        return view('admin.listings.sections' , compact('pageData'));
    }
}
