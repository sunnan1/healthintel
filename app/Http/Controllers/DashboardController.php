<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard() {
        return view("admin.employee-registration");
    }

    public function showSchedule()
    {
        $doctors = Employee::all();
        $pageData = [
            'main' => 'Scheduling',
            'title' => 'Define Schedule',
            'doctors' => $doctors,
        ];
        return view ('admin.listings.doctor-schedule',compact('pageData'));
    }

    public function saveSchedule(Request $request)
    {
        dd($request->all());
    }

}
