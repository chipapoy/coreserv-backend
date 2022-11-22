<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DashboardModel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    //
    public function List(){
       
        // $data = RfpModel::all();
        $data = DB::table('rfp_dashboard')
        ->join('rfp', 'rfp_dashboard.rfp_id', '=', 'rfp.id')
        ->select('rfp_dashboard.*', 'rfp.vendor_name', 'rfp.address')
        ->get();
        
        return $data;
    }

    public function store(Request $request){
        // Validate the request...
 
        $rfp = new DashboardModel;
 
        $rfp->vendor_name = $request->vendor_name;
        $rfp->address = $request->address;
        $rfp->contact_num = $request->contact_num;
        $rfp->tin_num = $request->tin_num;
        $rfp->company_code = $request->company_code;
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
}
