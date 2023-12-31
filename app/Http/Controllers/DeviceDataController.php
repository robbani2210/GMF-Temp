<?php

namespace App\Http\Controllers;

use App\Models\DynamoDB\device_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class DeviceDataController extends Controller
{
    function show_dashboard(){
        $results = device_data::all();
        $data = [];
    
        foreach ($results as $result) {
            $data[] = [
                "timestamp" => date('d-m-Y', $result->payload['timestamp']),
                "temperature" => round($result->payload['temperature'],2),
                "humidity" => $result->payload['humidity'],
            ];
        }

        
        usort($data, function($a, $b){
            if ($a['timestamp'] == $b['timestamp']) {
                return 0;
            }
            return ($a['timestamp'] < $b['timestamp']) ? -1 : 1;
        });
        return view('dashboard', compact('data'));
    }
    

    function device_details(Request $request){
        $limit = 5;
        $startKey = $request->query('start_key');
        $prevKey = $request->query('prev_key'); 

        $queryBuilder = DB::connection('dynamodb')->table('device_data')->limit($limit);

        if ($startKey) {
            $queryBuilder->exclusiveStartKey(json_decode($startKey, true, 512, JSON_THROW_ON_ERROR));
        } elseif ($prevKey) {
            $queryBuilder->exclusiveStartKey(json_decode($prevKey, true, 512, JSON_THROW_ON_ERROR));
        }

        $response = $queryBuilder->scan();
        $data = $response['Items'];

        $lastEvaluatedKey = $response['LastEvaluatedKey'] ?? null;

        $prevStartKey = null;
        if ($startKey) {
            $prevStartKey = $startKey;
        } elseif ($prevKey) {
            $prevStartKey = $prevKey; 
        }

        return view('device', compact('data', 'lastEvaluatedKey', 'prevStartKey'));

    }    

    
}
