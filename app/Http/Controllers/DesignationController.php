<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function showDesignationList()
    {
        $designation = Designation::all();
        $pageData = [
            'main' => 'Human Resource',
            'title' => 'Designation List',
            'designation' => $designation,
        ];
        return view('admin.listings.designations' , compact('pageData'));
    }

    public function saveDesignation(Request $request)
    {
//        dd($request->all());
        try {
            $designation = new Designation();
            $designation->code = $request->get('designationCode');
            $designation->name = $request->get('designation');
            if (!$request->has('activeStatus')){
                $designation->delete();
            }
            $designation->save();

        }catch (\Exception $exception)
        {
            app('log')->info('saveDesignation Exception',[
                'message' => $exception->getMessage(),
                'file' => $exception->getFile(),
                'line' => $exception->getLine()
            ]);
        }
    }

}
