<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    //
    public function operation($num1,$sign,$num2){
    	switch ($sign) {
    		case '+':
    		$res=$num1+$num2;
    			return view('calc',["res"=>$res]);
    			# code...
    			break;
    			case '-':
    		$res=$num1-$num2;
    			return view('calc',["res"=>$res]);
    			# code...
    			break;
    			case '*':
    		$res=$num1*$num2;
    			return view('calc',["res"=>$res]);
    			# code...
    			break;
    			case 'divide':
    		$res=$num1/$num2;
    			return view('calc',["res"=>$res]);
    			# code...
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }
}
