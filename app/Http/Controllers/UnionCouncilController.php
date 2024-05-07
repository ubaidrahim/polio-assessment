<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnionCouncil;

class UnionCouncilController extends Controller
{
    public function fetch(Request $request){
        $id = $request->id;
        return response()->json(['data' => UnionCouncil::where('tehsil_id',$id)->get()]);
    }
}
