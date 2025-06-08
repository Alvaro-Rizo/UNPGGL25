<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function sum($a, $b)
    {
        $result = $a + $b;
        return view('math.sum', compact('a', 'b', 'result'));
    }

    public function subtract($a, $b)
    {
        $result = $a - $b;
        return view('math.subtract', compact('a', 'b', 'result'));
    }

    public function multiply($a, $b)
    {
        $result = $a * $b;
        return view('math.multiply', compact('a', 'b', 'result'));
    }
}
