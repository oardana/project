<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\vehicle;

class ControllerVehicle extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $search)
    {
        //
        $keyword = $search->search;

        $vehicles = DB::table('vehicles')
        ->join('members','vehicles.member_id','=','members.id')
        ->join('vehicletypes','vehicles.vehicletype_id','=','vehicletypes.id')
        ->select('vehicles.id','vehicles.license_plate','members.name','vehicletypes.name_type','vehicles.notes','vehicles.created_at')
        ->where('members.name','LIKE',"%$keyword%")
        ->get();
        return view('layouts.vehicle',compact('vehicles'));
        // dd($vehicles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $nameMember = DB::table('members')->get();
        $vehicleType = DB::table('vehicletypes')->get();
       return view('layouts.vehicleadd',compact('nameMember','vehicleType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'notes'=> 'required',
            'member_id' => 'required',
            'vehicletype_id' => 'required',
            'license_plate' => 'required'
        ]);
        vehicle::create($request->all());
        return redirect('/vehicle');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        //
        $vehicles = DB::table('vehicles')
        ->join('members','vehicles.member_id','=','members.id')
        ->join('vehicletypes','vehicles.vehicletype_id','=','vehicletypes.id')
        ->select('vehicles.id','vehicles.license_plate','members.name','vehicles.member_id','vehicles.vehicletype_id','vehicletypes.name_type','vehicles.notes')->where('vehicles.id','=',$id)->get();
        $nameMember = DB::table('members')->get();
        $vehicleType = DB::table('vehicletypes')->get();
       return view('layouts.vehicleedit',compact('nameMember','vehicleType','vehicles'));
    // dd($vehicles);
        
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
        // DB::table('vehicles')->where('id',$id)->delete();
        // return redirect('/vehicle');

        $parent = vehicle::findOrFail($id);

        if($parent->parkingdata->IsEmpty()){
            $parent->delete();
            return redirect()->back()->with('success','Success Delete Data Vehicle');
        }else{
            return redirect()->back()->with('error','Data Failed Because constraint Table Parking Data');
        }
    }
}
