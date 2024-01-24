<?php

namespace App\Http\Controllers;

use App\Models\Segment;
use Illuminate\Http\Request;

class SegmentController extends Controller
{
    public function getSegmentData() {
        return Segment::all();
    }
}
