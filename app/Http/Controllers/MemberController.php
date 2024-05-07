<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function add(){
        return view('members.add');
    }

    public function create(Request $request){
        $request->validate([
            'household' => ['required'],
            'name' => ['required'],
            'father_name' => ['required'],
            'contact_number' => ['required'],
            'dob' => ['required'],
            'age' => ['required'],

        ]);
        $member = new Member();
        $member->name = $request->name;
        $member->father_name = $request->father_name;
        $member->contact_number = $request->contact_number;
        $member->dob = $request->dob;
        $member->age = $request->age;
        $member->household_id = $request->household;
        $member->save();
        return redirect()->back();

    }

    public function fetch(Request $request){
        //$id = $request->id;
        return response()->json(['data' => Member::all()]);
    }
}
