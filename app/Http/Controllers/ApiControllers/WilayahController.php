<?php

namespace App\Http\Controllers\ApiControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class WilayahController extends Controller
{


    public function province()
    {
        $province = DB::table('province')->get();

        return response()->json([
            'status_code' => 200,
            'data' => $province
        ]);
    }

    public function regencies(Request $request)
    {

        $rules = [
            'province_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (!$validator->fails()) {
            $regencies = DB::table('regencies')->where('province_id', $request->province_id)->get();
            return response()->json([
                'status_code' => 200,
                'data' => $regencies
            ]);
        } else {
            return response()->json([
                'status_code' => 500,
                'data' => ['message' => $validator->errors()->first()],
            ]);
        }
    }

    public function districts(Request $request)
    {

        $rules = [
            'regencies_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (!$validator->fails()) {
            $districts = DB::table('districts')->where('regencies_id', $request->regencies_id)->get();
            return response()->json([
                'status_code' => 200,
                'data' => $districts
            ]);
        } else {
            return response()->json([
                'status_code' => 500,
                'data' => [
                    'message' => $validator->errors()->first()
                ],
            ]);
        }
    }

    public function villages(Request $request)
    {

        $rules = [
            'districts_id' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if (!$validator->fails()) {
            $villages = DB::table('villages')->where('districts_id', $request->districts_id)->get();
            return response()->json([
                'status_code' => 200,
                'data' => $villages
            ]);
        } else {
            return response()->json([
                'status_code' => 500,
                'data' => [
                    'message' => $validator->errors()->first()
                ],
            ]);
        }
    }
}
