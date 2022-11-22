<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RfpModel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Rfp extends Controller
{
    //
    public function List(){
       
        // $data = RfpModel::all();
        $data = RfpModel::where('status',1)
        ->orderBy('id','DESC')
        ->get();
        
        return $data;
    }

    

    public function cityList(){
       
        $data = RfpModel::all();

        return $data;
    }

    public function store(Request $request){
        // Validate the request...
 
        $rfp = new RfpModel;
 
        $rfp->vendor_name = $request->vendor_name;
        $rfp->address = $request->address;
        $rfp->contact_num = $request->contact_num;
        $rfp->tin_num = $request->tin_num;
        $rfp->company_code = $request->company_code;
        $rfp->sky_contact_id = $request->sky_contact_id;
        $rfp->sky_contact_person = $request->sky_contact_person;
        $rfp->sky_phone_num = $request->sky_contact_num;
        $rfp->sky_email = $request->sky_email;
        $rfp->internal_order1 = $request->internal_order1;
        $rfp->internal_order2 = $request->internal_order2;
        $rfp->area = $request->area;
        $rfp->system = $request->system;
 
        return $rfp->save();
        // return $vendor;
    }

    public function test(Request $request){

        return $request;
    }
}
