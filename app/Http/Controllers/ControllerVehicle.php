<?php

namespace App\Http\Controllers;

use App\Models\vehicle;
use Illuminate\Http\Request;
use App\Models\member;
use App\Models\vehicletype;

class ControllerVehicle extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->search;
        $vehicles = vehicle::whereRelation('member','name','LIKE',"%$keyword%")->paginate(4);
        return view('layouts.vehicle',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nameMember = member::all();
        $vehicleType = vehicletype::all();
       return view('layouts.vehicleadd',compact('nameMember','vehicleType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'notes'=> 'required',
            'member_id' => 'required',
            'vehicletype_id' => 'required',
            'license_plate' => 'required|unique:vehicles'
        ]);
        vehicle::create($request->all());
        return redirect('/vehicle');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        
        $nameMember = member::all();
        $vehicleType = vehicletype::all();
        return view('layouts.vehicleedit',compact('nameMember','vehicleType','vehicle'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        vehicle::where('id',$id)->update([
            'license_plate' => $request->license_plate,
            'member_id' =>$request->member_id,
            'vehicletype_id'=>$request->vehicletype_id,
            'notes'=>$request->notes
        ]);
        return redirect('/vehicle');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $parent = vehicle::findOrFail($id);

        if($parent->parkingdata->IsEmpty()){
            $parent->delete();
            return redirect()->back()->with('success','Success Delete Data Vehicle');
        }else{
            return redirect()->back()->with('error','Data Failed Because constraint Table Parking Data');
        }
    }
}
