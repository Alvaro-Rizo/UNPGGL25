<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeCalculatorController extends Controller
{
    public function calculate($birthYear)
    {
        $currentYear = date('Y');
        $age = $currentYear - $birthYear;
        return view('age.calculate', compact('birthYear', 'age'));
    }
}
