<?php

namespace App\Http\Controllers;

use App\Models\FeeHead;
use Illuminate\Http\Request;

class FeeHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.fee_head.fee_head');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $fee = new FeeHead();
        $fee->name = $request->name;
        $fee->save();
        return redirect()->route('fee_head.create')->with('success', 'Fee Head Added Successfully');
    }
    public function read()
    {
        $fee['fee'] = FeeHead::latest()->get();
        return view('admin.fee_head.fee_head_list', $fee);
    }
    public function edit($id)
    {
        $fee['class'] = FeeHead::find($id);
        return view('admin.fee_head.edit_fee_head',$fee);
    }

    /**
     * Display the specified resource.
     */
    public function show(FeeHead $feeHead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $fee =FeeHead::find($request->id);
        $fee->name = $request->name;
        $fee->update();
        return redirect()->route('fee_head.read')->with('success', 'Fee Head Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeeHead $feeHead)
    {
        //
    }
}
