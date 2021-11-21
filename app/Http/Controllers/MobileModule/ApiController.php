<?php

namespace App\Http\Controllers\MobileModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //

    public function GetAllDoctor()
    {

        $doctors=DB::select('call GetAllDoctor()');
        return response()->json(['doctors' =>$doctors],200);
    }
}
