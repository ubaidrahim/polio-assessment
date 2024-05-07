<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Division;

class DivisionController extends Controller
{
    public function fetch(Request $request){
        $id = $request->id;
        return response()->json(['data' => Division::where('province_id',$id)->get()]);
    }
}
