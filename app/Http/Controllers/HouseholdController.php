<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Household;

class HouseholdController extends Controller
{
    public function add(){
        return view('household.add');
    }

    public function create(Request $request){
        $request->validate([
            'unioncouncil' => ['required'],
            'household' => ['required','unique:households,household_no']
        ]);
        $household = new Household();
        $household->household_no = $request->household;
        $household->union_council_id = $request->unioncouncil;
        $household->save();
        return redirect()->back();

    }

    public function fetch(Request $request){
        $id = $request->id;
        return response()->json(['data' => Household::where('union_council_id',$id)->get()]);
    }
}
