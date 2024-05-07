<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    public function fetch(Request $request){
        return response()->json(['data' => Province::all()]);
    }
}
