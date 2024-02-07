<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    //
    public function showSectionList() {
        $pageData = [
            'main' => 'Human Resource',
            'title' => 'Section List'
        ];
        return view('admin.listings.sections' , compact('pageData'));
    }
}
