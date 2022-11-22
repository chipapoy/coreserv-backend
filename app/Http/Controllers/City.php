<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityModel;
use Illuminate\Support\Arr;

class City extends Controller
{
    //
    public function List(){
       
        $data = CityModel::orderBy('city')
                ->get();
        // $data = [];
        
        // VendorModel::chunk(1, function($vendors){

        //     foreach ($vendors as $vendor) {
        //         echo $vendor;
        //     } 
        // });

        return $data;
    }

}
