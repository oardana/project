<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class ControllerApiMember extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = member::all();

        return response()->json([
            'data' => $member
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $member = member::create($request->all());
        return response()->json([
            'data' => $member
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = member::where('id',$id)->get();

        return response()->json([
            'data' =>$member
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = member::where('id',$id)->update([
            'name' => $request->name,
            'membership_id' => $request->membership_id,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'gender'=> $request->gender,
            'date_of_birth' => $request->date_of_birth
        ]);

        return response()->json([
            'data' => ' Data Succesfully Updated'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $parent = member::findOrfail($id);
        if($parent->vehicle->isEmpty()){
            $parent->delete();
            return response()->json([
                'data' => 'Data member Success deleted'
            ]);
        }else{
            return response()->json([
                'data' => 'Data Constraint Table Vehicle'
            ]);
        }

    }
}
