<?php

namespace App\Http\Controllers;

use App\Models\Hourlyrate;
use App\Models\membership;
use App\Models\Vehicletype;
use Illuminate\Http\Request;

class ControllerHourlyrate extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hourlyrate = Hourlyrate::all();
        return view('layouts.hourlyrate',compact('hourlyrate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $membership = membership::all();
        $vehicletype = Vehicletype::all();
        return view('layouts.hourlyrateadd',compact('membership','vehicletype'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'membership_id' => 'required',
            'vehicletype_id' => 'required',
            'value' => 'required|numeric'
        ]);
        Hourlyrate::create($request->all());
        return redirect('/hourlyrate');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hourlyrate $hourlyrate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hourlyrate $hourlyrate)
    {
        //
        $membership = membership::all();
        $vehicletype = Vehicletype::all();
        return view('layouts.hourlyrateedit',compact('hourlyrate','membership','vehicletype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Hourlyrate::where('id',$id)->update([
            'membership_id' => $request->membership_id,
            'vehicletype_id' => $request->vehicletype_id,
            'value' => $request->value
        ]);
         return redirect('/hourlyrate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $parent = Hourlyrate::findOrFail($id);
        if($parent->parkingdata->isEmpty()){
            $parent->delete();
            return back()->with('success','Data Deleted Succesfully');
        }else{
            return back()->with('error','Data Failed delete because constraint page Parking data');
        }
    }
}
