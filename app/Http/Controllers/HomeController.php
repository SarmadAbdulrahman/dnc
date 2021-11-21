<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Governarate;
use App\Models\Specilaty;
use App\Models\Procince;
use App\Models\Doctor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function CreateAccounts()
    {
        
        
        $InformationArray=Array(
            "Governarates"=>Governarate::all(),
             "Speiclaities"=>Specilaty::all(),
        );
        return view('createAccounts',$InformationArray); 
        
    }
    
    public function GetProvinceByGovId(Request $Request)
    {
        
        $Provinces=Procince::where('gov_id','=',$Request->id)->select('id as id','name as text')->get();
        
       return response()->json(['results' =>$Provinces],200);
        
    }
    
    public function StoreNewAccount(Request $Request)
    {
       // dd($Request);
        
        Doctor::create([
             'doctor_name' =>$Request->Doctor_Name
        , 'sp_id' =>$Request->select_Specialty
        , 'pr_id' =>$Request->select_Province
        , 'gov_id' =>$Request->select_Government
        ]);
        
        
        return redirect()->back();
    }
}
