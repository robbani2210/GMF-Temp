<?php

namespace App\Http\Controllers;

use App\Models\DynamoDB\logsheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class LogSheetController extends Controller
{
    function show(){
        $results = DB::connection('dynamodb')->table('logsheet')->limit(1)->scan();

        foreach ($results['Items'] as $result) {
            $timestamp = $result['Timestamp'];
            $data = [
                [
                    'name' => 'Main Motor Current',
                    'value' => $result['Main_Motor_Current'],
                ],
                [
                    'name' => 'Temp Cooling Water In',
                    'value' => $result['Temp_Cooling_Water_in'],
                ],
                [
                    'name' => 'Temp Cooling Water Out',
                    'value' => $result['Temp_Cooling_Water_out'],
                ],
                [
                    'name' => 'Vane Position',
                    'value' => $result['Vane_Position'],
                ],
                [
                    'name' => 'Condenser Pressure',
                    'value' => $result['Condenser_Pressure'],
                ],
                [
                    'name' => 'Oil Tank Temp',
                    'value' => $result['Oil_Tank_Temp'],
                ],
                // 'kapasitas_oli' => [
                //     'name' => 'Kapasitas Oli',
                //     'value' => $result['Kapasitas_Oli'],
                // ],
                [
                    'name' => 'Temp Chilled Water In',
                    'value' => $result['Temp_CW_in'],
                ],
                [
                    'name' => 'Temp Chilled Water Out',
                    'value' => $result['Temp_CW_out'],
                ],
                [
                    'name' => 'Oil Pressure',
                    'value' => $result['Oil_Pressure'],
                ],
                [
                    'name' => 'Evaporator Pressure',
                    'value' => $result['Evaporator_Pressure'],
                ],
            ];
        }

        return view('dashboard', compact('data', 'timestamp'));
    }
    

    function device_details(Request $request){
        $limit = 5;
        $startKey = $request->query('start_key');
        $prevKey = $request->query('prev_key'); 

        $queryBuilder = DB::table('device_data')->limit($limit);

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
