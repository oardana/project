<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membership;
use Illuminate\Pagination\Paginator;


class ControllerMembership extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $membership = membership::all();
       return view('layouts.membership',compact('membership'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.membershipadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name_member' => 'required'
        ]);

        membership::create($request->all());

        return redirect('/membership');
        

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(membership $membership)
    {
        return view('layouts.membershipedit',compact('membership'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name_member'=>'required'
        ]);
        membership::where('id',$id)->update([
            'name_member' => $request->name_member
        ]);
        return redirect('/membership');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $parent = membership::findOrFail($id);
        if($parent->hourlyrate->isEmpty()){
            $parent->delete();
            return back()->with('success','Deleted Successfully');
        }else{
            return back()->with('error','Data failed Constraint with Hourlyrate');
        }
        return redirect('/membership');
    }
}
