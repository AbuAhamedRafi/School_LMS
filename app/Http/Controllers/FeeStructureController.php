<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\Classes;
use App\Models\FeeHead;
use App\Models\FeeStructure;
use Illuminate\Http\Request;

class FeeStructureController extends Controller
{
    public function index()
    {
        $data['classes'] = Classes::all();
        $data['academic_year'] = AcademicYear::all();
        $data['fee_head'] = FeeHead::all();
        return view('admin.fee_structure.fee_structure',$data);
    }
    public function store(Request $request)
    {
        echo"okay";
    }
}
