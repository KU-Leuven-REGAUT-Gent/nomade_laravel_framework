<?php

namespace App\Http\Controllers;

use App\ApiLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiLogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $this->authorize('index', ApiLog::class);
        $apiLogs = ApiLog::allApiLogs();
        return view('apiLog.index', compact('apiLogs'));
    }

    public function show(ApiLog $apiLog){
        $this->authorize('view', ApiLog::class, $apiLog);
        //Lazy loading relationships
        return view('apiLog.show', compact('apiLog'));
    }
}
