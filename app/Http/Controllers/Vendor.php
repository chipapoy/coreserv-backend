<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VendorModel;
use Illuminate\Support\Arr;

class Vendor extends Controller
{
    //
    public function List(){
       
        // $data = VendorModel::all();
        $data = VendorModel::where('active',1)
        ->orderBy('id','DESC')
        ->get();
        
        // VendorModel::chunk(1, function($vendors){

        //     foreach ($vendors as $vendor) {
        //         echo $vendor;
        //     } 
        // });

        return $data;
    }

    public function vendorNameList(){
       
        // $data = RfpModel::all();
        $data = VendorModel::selectRaw('DISTINCT vendor_name as value, vendor_name as label')
        ->where('active',1)
        ->get();
        
        return $data;
    }

    public function store(Request $request){
        // Validate the request...

        // dd($request);
        // return $request;
 
        $vendor = new VendorModel;
 
        $vendor->vendor_name = $request->vendor_name;
        $vendor->vendor_code = $request->vendor_code;
        $vendor->bldg_name = $request->bldg_name;
        $vendor->city = $request->city;
        $vendor->contact_person = $request->contact_person;
        $vendor->contact_num = $request->contact_num;
        $vendor->kam = $request->kam;
        $vendor->tier_segment = $request->tier;
        $vendor->account = $request->account;
        $vendor->account_type = $request->account_type;
        $vendor->payment_terms = $request->payment_terms;
        $vendor->soa_type = $request->soa_type;
 
        return $vendor->save();
        // return $vendor;
    }

    public function test(Request $request){

        return $request;
    }
}
