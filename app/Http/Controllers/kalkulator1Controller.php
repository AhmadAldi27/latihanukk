<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('kalculator1');
    }

    public function calculate(Request $request)
    {
        $operand1 = $request->input('operand1');
        $operand2 = $request->input('operand2');
        $operator = $request->input('operator');

        switch ($operator) {
            case '+':
                $result = $operand1 + $operand2;
                break;
            case '-':
                $result = $operand1 - $operand2;
                break;
            case '*':
                $result = $operand1 * $operand2;
                break;
            case '/':
                if ($operand2 == 0) {
                    $result = "Error: Division by zero!";
                } else {
                    $result = $operand1 / $operand2;
                }
                break;
            default:
                $result = "Invalid operator!";
        }

        return view('calculator', ['result' => $result]);
    }
}