<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class ControllerMember extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $keywords = $request->search;
        $members = DB::table('memberships')->join('members','members.membership_id','=','memberships.id')->select('memberships.*','members.*')->where('members.name','LIKE',"%$keywords%")->paginate(4);
        return view('layouts.member',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
        $memberships = DB::table('memberships')->get();
        return view('layouts.memberadd',compact('memberships'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address'=> 'required',
            'phone_number' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required'

        ]);
        member::create($request->all());
          return  redirect('/member');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $memberships = DB::table('memberships')->get();
        $member = DB::table('memberships')->join('members','members.membership_id','=','memberships.id')->select('memberships.*','members.*')->where('members.id','=',$id)->get();
        return view('layouts.memberedit',compact('member','memberships'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
        $members = DB::table('members')->join('memberships','members.membership_id','=','memberships.id')->where('members.id',$id)->delete();
        return redirect('/member');
    }
}
