<?php

namespace Yasiru\Calculator\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function index(){
        return view('calculator::index');
    }

    public function calculate(Request $request) {

        $result = 0;

        $a = $request->a;
        $b = $request->b;

        $op = $request->op;


        switch($op) {
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                $result = $a / $b;
                break;
            default:
        }

        return view('calculator::index', compact('result', 'op', 'a', 'b'));
    }

}
