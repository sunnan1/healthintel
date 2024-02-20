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
        try {
            $designation = new Designation();
            $designation->name = $request->get('designation');
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
