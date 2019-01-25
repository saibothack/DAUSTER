<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TrackingController extends Controller
{
    public function tracking(Request $request){
        $validator = Validator::make($request->all(), [
            'latitude' => 'required',
            'longitude' => 'required',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors()
            );

            return response()->json($data, 400);
        }

        $user_id = Auth::id();

        $data = array(
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
            'status' => $request['status'],
            'user_id' => $user_id
        );


        $tracking = Tracking::where('user_id', '=', $user_id);

        if ($tracking->count() > 0) {
            $tracking->firstOrFail()->update($data);
        } else {
            Tracking::create($data);
        }

        return response()->json(null, 204);
    }

    public function search(Request $request){
        $results = array();

        $validator = Validator::make($request->all(), [
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        if ($validator->fails()) {
            $data = array(
                'success' => false,
                'error' => $validator->errors()
            );

            return response()->json($data, 400);
        }

        $user_id = Auth::id();

        for($i=1;$i<=100;$i++) {
            $lon = $request['latitude'];
            $lat = $request['latitude'];
            $miles = $i;

            $sql = "SELECT *, 
                (3959 * acos(cos(radians('$lat')) * 
                cos(radians(latitude)) * 
                cos(radians(longitude) - 
                radians('$lon')) + 
                sin(radians('$lat')) * 
                sin(radians(latitude)))) 
                AS distance FROM yourtable HAVING distance < '$miles' ORDER BY distance ASC LIMIT 0, 5";

            $results = DB::select($sql, array(1));

            if(count($results) > 0) {
                break;
            }
        }


        return response()->json(null, 204);
    }


}
