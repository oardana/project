<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Models\membership;

class ControllerMember extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $keywords = $request->search;
        $members = member::where('name','LIKE',"%$keywords%")->paginate(4);
        return view('layouts.member',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        $memberships = membership::all();
        return view('layouts.memberadd',compact('memberships'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'membership_id' => ['membership_id' => 'required'],
            'address'=> 'required',
            'phone_number' => 'required|min:12',
            'date_of_birth' => 'required',
            'gender' => 'required',
        ]);
        member::create($request->all());
          return  redirect('/member');
    }

    /**
     * Display the specified resource.
     */
    public function show(member $member)
    {
        //
        $memberships = membership::all();
        return view('layouts.memberedit',compact('member','memberships'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address'=> 'required',
            'phone_number' => 'required|min:12',
            'date_of_birth' => 'required',
            'gender' => 'required'

        ]);

        member::where('id',$id)->update([
            'name'=> $request->name,
            'membership_id'=> $request->membership_id,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender
        ]);
        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $parent = member::findOrFail($id);

        if($parent->vehicle->IsEmpty()){
            $parent->delete();
            return redirect()->back()->with('success','Success Delete Data Member');
        }else{
            return redirect()->back()->with('error','Data Failed Because constraint Page Vehicle');
        }
    }
}
