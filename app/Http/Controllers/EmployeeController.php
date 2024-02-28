<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\Section;
use App\Models\Setting;
use Carbon\Carbon;
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
        try {
            if (is_null($request->get('employeeId'))){
                $employee = new Employee();
            }else{
                $employee = Employee::withTrashed()->whereId($request->get('employeeId'))->first();
            }
            if ($employee) {
                if ($request->hasFile('employeeImage')) {
                    $employee->employee_picture = $request->employeeImage->storeAs('/img' , $request->file('employeeImage')->getClientOriginalName());
                }
                $employee->salutation = '';
                $employee->first_name =  $request->get('firstName');
                $employee->middle_name =  $request->get('middleName');
                $employee->last_name =  $request->get('lastName');
                $employee->father_name =  $request->get('fatherName');
                $employee->spouse_name =  $request->get('spouseName'); //
                $employee->gender =  $request->get('gender');
                $employee->cnic =  $request->get('cnic');
                $employee->passport =  $request->get('passportNo');
                $employee->birth_place =  $request->get('birthCountry');
//                $employee->dob =  $request->get(Carbon::parse('dob','Y-m-d'));
                $employee->marital_status =  $request->get('martialStatus');
                $employee->blood_group =  $request->get('bloodGroup');
                $employee->religion =  $request->get('religion');
                $employee->employee_category =  $request->get('employeeCategory');
                $employee->designation_id =  $request->get('designation');
//                $employee->doj =  '';
//                $employee->department_id =  $request->get('department');
//                $employee->position_id =  $request->get('position');
                $employee->employee_fp =  '';
                $employee->landline_number =  $request->get('Landline');
                $employee->mobile_number =  $request->get('Mobile');
                $employee->work_mobile =  $request->get('workMobile');
                $employee->personal_email =  $request->get('email');
                $employee->work_email =  $request->get('workEmail');
                $employee->country_id  =  $request->get('country');
                $employee->province_id   =  $request->get('province');
                $employee->city_id    =  $request->get('city');
                $employee->postal_code    =  $request->get('postalCode');
                $employee->permenant_address    =  $request->get('permanentAddress');
                $employee->emergency_contact_person    =  $request->get('contactPerson');
                $employee->emergency_contact    =  $request->get('contactNo');
//                $employee->created_by     =  '';
//                $employee->updated_by      =  '';
                $employee->save();
                $employee->restore();
                if (! $employee->has('activeStatus')) {
                    $employee->delete();
                }
                return redirect()->back();
            }
        }catch (\Exception $exception) {
            app('log')->info('saveEmployee Exception' , [
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine()
            ]);
        }
    }

}
