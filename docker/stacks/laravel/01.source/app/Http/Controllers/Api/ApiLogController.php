<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ApiLog;
use App\Http\Resources\ApiLogResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiLogController extends Controller
{
    public function index(Request $request){
        $this->authorize('index', ApiLog::class);


        /************************************************************************************ */
        $apiLogs = ApiLog::with('category')->get()->sortBy('category.order')->groupBy('category.name')->map(function($groupItems){
            return $groupItems->sortBy('method')->groupBy('method')->map(function($groupItems){
                return $groupItems->unique('path')->sortBy('path');
            });
        });
        return view('apiLog.json', compact('apiLogs'));
        /*********************************************************************************** */


        //$apiLogs = ApiLog::with('category')->get();
        $apiLogs = ApiLog::with('category')->get()->sortBy('category.order')->groupBy('category.name')->map(function($groupItems){
            return $groupItems->sortBy('method')->groupBy('method')->map(function($groupItems){
                return $groupItems->unique('path')->sortBy('path')->groupBy('path');
            });
        });
        //return ApiLogResource::collection($apiLogs);



        //$apiLogs = ApiLog::with('category')->get()->unique('url','method')->sortBy(['url','category.order']);
        //$apiLogs = ApiLog::with('category')->get()->unique('url','method')->sortBy(['url','category.order'])->groupBy('category');
        return ApiLogResource::collection($apiLogs);
    }
}
