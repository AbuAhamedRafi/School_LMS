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
        $request->validate([
            'class_id' =>'required',
            'academic_year_id' =>'required',
            'fee_head_id' =>'required',
        ]);
        FeeStructure::create($request->all());
        return redirect()->route('fee-structure.create')->with('success', 'Fee Structure Added Successfully');
    }
}
