<?php

namespace App\Http\Controllers;

use App\Models\DynamoDB\device_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class DeviceDataController extends Controller
{
    function show_dashboard(){
        $result = device_data::limit(5)->scan();

        $data = [
            "device_data" => $result
        ];

        return view('dashboard', compact('data'));
    }

    function device_details(Request $request){
        $data = device_data::limit(5)->scan();
        
        $nextPage = $data->first()->meta()['LastEvaluatedKey']; // array
    
        // Convert the array to a query string
        $queryString = http_build_query($nextPage);
        
        return view('device', compact('data', 'queryString'));
    }    
}
