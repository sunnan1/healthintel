<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function showPositionList()
    {
        $departments = Department::all();
        $designations = Designation::all();
        $positions = Position::all();
        $pageData = [
            'main' => 'Human Resource',
            'title' => 'Position List',
            'department' => $departments,
            'designation' => $designations,
            'position' => $positions,
        ];
        return view('admin.listings.positions',compact('pageData'));
    }

    public function savePosition(Request $request)
    {
        dd($request->all());
    }
}
