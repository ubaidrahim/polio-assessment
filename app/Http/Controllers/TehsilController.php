<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tehsil;

class TehsilController extends Controller
{
    public function fetch(Request $request){
        $id = $request->id;
        return response()->json(['data' => Tehsil::where('district_id',$id)->get()]);
    }
}
