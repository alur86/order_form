<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response as FacadeResponse;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\OrderRequest;


class FormController extends Controller
{
    

 public function index() {
 
  return view('form.index');

 }





public function postForm(OrderRequest $request){
	

if ($request->isMethod('post')) {   

 $data = [

['name'=>'name', 'value'=>$request->get('name')],
['name'=>'date from', 'value'=>$request->get('datetimepicker1')],
['name'=>'date out', 'value'=>$request->get('datetimepicker2')],
['name'=>'phone', 'value'=>$request->get('datetimepicker1')],
];


 $respone = ['status'=>200,'msg'=>'New order was done successfully','lead=1234'=>' 1234 - id in system',
                                                                                                      $data];

     return json_encode($respone);                        

        }


   else {

        $respone = ['status'=>403,
                               'msg'=>'Wrong access'];

          return json_encode($respone);                        
  }


}



}


