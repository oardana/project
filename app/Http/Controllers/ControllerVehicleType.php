<?php

namespace App\Http\Controllers;

use App\Models\Vehicletype;
use App\Models\membership;
use Illuminate\Http\Request;

class ControllerVehicleType extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $vehicletypes = Vehicletype::all();
        return view('layouts.vehicletype',compact('vehicletypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return view('layouts.vehicletypeadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name_type' => 'required'
        ]);
        Vehicletype::create($request->all());
        return redirect('/vehicletype');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicletype $vehicletype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicletype $vehicletype)
    {
        //
        return view('layouts.vehicletypeedit',compact('vehicletype'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Vehicletype::where('id',$id)
        ->update([
            'name_type' =>$request->name_type
        ]);
        return redirect('/vehicletype');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $parent = Vehicletype::findOrFail($id);
        if($parent->vehicle->isEmpty() && $parent->Hourlyrate->isEmpty()){
            $parent->delete();
            return back()->with('success','deleted Succesfully');
        }else{
            return back()->with('error','Data Failed Because constraint Page Vehicle Or Page Hourlyrate');
        }
    }
}
