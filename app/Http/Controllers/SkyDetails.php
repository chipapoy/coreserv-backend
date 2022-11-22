<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VendorModel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SkyDetails extends Controller
{
    //
    public function contactPerson(){
       
        // $data = RfpModel::all();
        $data = DB::table('sky_contact_details')
        ->selectRaw('id as value, trim(contact_person) as label')
        ->where('status',1)
        ->get();
        
        return $data;
    }

    public function initContactPerson($id){
       
        // $data = RfpModel::all();
        $data = DB::table('sky_contact_details')
        ->selectRaw('id as value, trim(contact_person) as label')
        ->where('id',$id)
        ->where('status',1)
        ->get();
        
        return $data;
    }

    public function contactDetails($id){
       
        // $data = RfpModel::all();
        $data = DB::table('sky_contact_details')
        ->selectRaw('contact_number, email_add')
        ->where('id',$id)
        ->where('status',1)
        ->get();
        
        return $data;
    }

    public function vendorNameList(){
       
        // $data = RfpModel::all();
        $data = VendorModel::selectRaw('DISTINCT vendor_name as value, vendor_name as label')
        ->where('active',1)
        ->get();
        
        return $data;
    }
}
