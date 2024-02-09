<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function showDepartmentList() {
        $department = Department::withTrashed()->get();
        $pageData = [
            'main' => 'Human Resource',
            'title' => 'Department List',
            'data' => $department
        ];
        return view('admin.listings.departments' , compact('pageData'));
    }

    public function saveDepartment(Request $request) {
        try {
            if (is_null($request->departmentId))
                $department = new Department();
            else
                $department = Department::withTrashed()->whereId($request->get('departmentId'))->first();

            if ($department) {
                $department->name = $request->get('departmentName');
                $department->code = $request->get('departmentCode');
                $department->save();
                $department->restore();
                if (! $request->has('activeStatus')) {
                    $department->delete();
                }
                return redirect()->back();
            }
        }catch (\Exception $exception) {
            app('log')->info('saveDepartment Exception' , [
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine()
            ]);
        }
    }
}
