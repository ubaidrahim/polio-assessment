<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function fetch(Request $request){
        $id = $request->id;
        return response()->json(['data' => District::where('division_id',$id)->get()]);
    }
}
