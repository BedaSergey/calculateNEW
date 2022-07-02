<?php

namespace App\Http\Controllers\Calc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\CalculatorTrait;

class SecondCalculatorController extends Controller
{
    // For methods K1 and K2
    use CalculatorTrait;

    /* Incoming request
    array:29 [▼
    "firstta" => null
    "firsttb" => null
    "firsttc" => null
    "secondta" => "Культура"
    "secondtb" => null
    "secondtc" => null
    "secondtd" => null
    "secondte" => null
    "secondtf" => null
    "thridta" => "Культура"
    "thridtb" => null
    "thridtc" => null
    "thridtd" => null
    "thridte" => null
    "thridtf" => null
    "fourthta" => "Культура"
    "fourthtb" => null
    "fourthtc" => null
    "fourthtd" => null
    "fourthte" => null
    "fourthtf" => null
    ]*/

    public function index(Request $request)
    {
        if ($request) {

            $results = [];

            // Calculator of the first table
            if ($request->firstta && $request->firsttb && $request->firsttc) {
                $result_first_table = $request->firstta/10*$request->firsttb/$request->firsttc;
                $results['result_first_table'] = $result_first_table;
            }

            // Calculator of the second table
            if ($request->secondtb && $request->secondtc && $request->secondta) {
                $result_second_table = ($request->secondtb/$request->secondtc)/($this->getK1Volume($request->secondta)/750);
                $results['result_second_table'] = $result_second_table;
            }

            // Calculator of the third table
            if ($request->thridtb && $request->thridtc && $request->thridta) {
                $result_thrid_table = ($request->thridtb/$request->thridtc)/($this->getK1Volume($request->thridta)/750);
                $results['result_thrid_table'] = $result_thrid_table;
            }

            // Calculator of the fourth table
            if ($request->fourthtb && $request->fourthtc && $request->fourthta) {
                $result_fourth_table = ($request->fourthtb/$request->fourthtc)/($this->getK1Volume($request->fourthta)/750);
                $results['result_fourth_table'] = $result_fourth_table;
            }

            // Returning old values through a session
            session([
                "firstta" => $request->firstta,
                "firsttb" => $request->firsttb,
                "firsttc" => $request->firsttc,
                "secondta" => $request->secondta,
                "secondtb" => $request->secondtb,
                "secondtc" => $request->secondtc,
                "secondtd" => $request->secondtd,
                "secondte" => $request->secondte,
                "thridta" => $request->thridta,
                "thridtb" => $request->thridtb,
                "thridtc" => $request->thridtc,
                "thridtd" => $request->thridtd,
                "thridte" => $request->thridte,
                "fourthta" => $request->fourthta,
                "fourthtb" => $request->fourthtb,
                "fourthtc" => $request->fourthtc,
                "fourthtd" => $request->fourthtd,
                "fourthte" => $request->fourthte,
            ]);

            return view('second_calculator', compact('results'));

        } else {

            return view('second_calculator', compact('results'));

        }
    }

    public function reset(Request $request)
    {
        if (session('auth')) {
            $request->session()->regenerate();
            session('auth') == true;
            return redirect()->route('secondcalculator');
        }
    }
}
