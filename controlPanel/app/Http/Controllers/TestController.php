<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function display(){
    	echo "Hello I am  from  Controllre";
    	//return view("second");
    	return view("abc.new");
    }
}
