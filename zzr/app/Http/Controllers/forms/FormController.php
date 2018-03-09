<?php

namespace App\Http\Controllers\forms;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    //
   	public function  index(){

   	}
    public function store(Request $request){
    	echo '当前路由:'.$request->path()."<br>";
    	echo '当前url:'.$request->url()."<br><pre>";
    	echo '当前参数:';
    	print_r($request->all());
    	echo "<br><hr>";

    		// return redirect()->back()->withInput();
    	
    }
}
