<?php

namespace App\Http\Controllers;

use App\Models\policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    function PolicyByType(Request $request){
        return policy::where('type', '=', $request->type)->first();
    }
}











