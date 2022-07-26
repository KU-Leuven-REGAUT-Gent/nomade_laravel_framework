<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\ParameterValue;
use App\Repositories\SetupRepository;

class ParameterValueController extends Controller
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

 

    public function show(ParameterValue $parameterValue){
        // dd( $parameterValue->description);
        $this->authorize('show', ParameterValue::class);
  
        return view('parameterValue.show', compact('parameterValue'));
    }

    public function edit(ParameterValue $parameterValue){
        $this->authorize('edit', ParameterValue::class);
        if ($parameterValue->description_en ==""){
            $text = '<p> 5 bytes of data in total</p>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th> # Bytes </th>
                    <th> Offset </th>
                    <th> Datatype </th>
                    <th> Name </th>
                    <th> Unit </th>
                    <th> Description </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width:10%">
                        "Enter number of Bytes"
                    </td>
                    <td style="width:10%">
                        "Enter Offset"
                    </td>
                    <td style="width:10%">
                        "Enter Datatype"
                    </td>
                    <td style="width:20%">
                        "Enter Name"
                    </td>
                    <td style="width:20%">
                        "Enter Unit"
                    </td>
                    <td style="width:30%">
                        "Enter Description"
                    </td>
                </tr>
            </tbody>
        </table>';
        }else{
            $text =  $parameterValue->description_en;
        }
// dd(trim($text));
        return view('parameterValue.edit', compact('parameterValue','text',));
    }

    public function update(ParameterValue $parameterValue){
        $this->authorize('edit', ParameterValue::class);
        $data = $this->validatedData();
   
        $parameterValue->update($data);

        return redirect('/parameterValues/'.$parameterValue->id);
    }

    protected function validatedData($pass_req=true){

        return request()->validate([
            'description_en' => 'required'
        ]);
    }

}
