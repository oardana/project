<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use App\Models\parkingdata;
use App\Models\vehicle;

class ControllerPayment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $date = Carbon::now()->format('Y-m-d');
        $time = Carbon::now()->format('H:i:s');
        $datetime = Carbon::now()->format('Y-m-d H:i:s');
        return view('layouts.payment',compact('date','time','datetime'));
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
            'license_plate' => 'required|unique:parkingdatas',
            'vehicle_id' => 'required',
            'employee_id' =>'required',
            'date_in' => 'required',
            'date_out' => 'required',
            'amount_to_pay'=> 'required'
        ]);
        parkingdata::create($request->all());
        return redirect('/payment')->with('success','Data send Successfully');
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
            $payments = DB::table('vehicles')->
            join('members','vehicles.member_id','=','members.id')->
            join('memberships','members.membership_id','=','memberships.id')->
            join('hourlyrates','memberships.id','=','hourlyrates.membership_id')->
            join('vehicletypes','vehicles.vehicletype_id','=','vehicletypes.id')->
            select('vehicles.id','vehicles.license_plate','vehicletypes.name_type','members.name','memberships.name_member as type_member',DB::raw('date(vehicles.created_at) as date_in'),DB::raw('time(vehicles.created_at) as time_in'),'hourlyrates.id as hours_id','hourlyrates.value','vehicles.created_at')->
            where('vehicles.license_plate','LIKE',"$id%")->
            limit(10)->
            get();

            return $payments;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
