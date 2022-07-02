<?php

namespace App\Http\Controllers\Calc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\CalculatorTrait;

class FirstCalculatorController extends Controller
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
    "fifthta" => null
    "fifthtb" => null
    "fifthtc" => null
    "fifthtd" => null
    "sixta" => "cdssefes"
    "sixtb" => "Культура"
    "sixtc" => null
    "sixtd" => null
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
            if ($request->secondtb && $request->secondtc && $request->secondtd && $request->secondte && $request->secondta) {
                $result_second_table = ($request->secondtb/$request->secondtc)*$this->getK2($request->secondtd, $request->secondte)/$this->getK1($request->secondta);
                $results['result_second_table'] = $result_second_table;
            }

            // Calculator of the third table
            if ($request->thridtb && $request->thridtc && $request->thridtd && $request->thridte && $request->thridta) {
                $result_thrid_table = ($request->thridtb/$request->thridtc)*$this->getK2($request->thridtd, $request->thridte)/$this->getK1($request->thridta);
                $results['result_thrid_table'] = $result_thrid_table;
            }

            // Calculator of the fourth table
            if ($request->fourthtb && $request->fourthtc && $request->fourthtd && $request->fourthte && $request->fourthta) {
                $result_fourth_table = ($request->fourthtb/$request->fourthtc)*$this->getK2($request->fourthtd, $request->fourthte)/$this->getK1($request->fourthta);
                $results['result_fourth_table'] = $result_fourth_table;
            }

            // Calculator of the fifth table
            if ($request->fifthtb && $request->fifthtc && $request->fifthtd) {
                $result_fifth_table = $request->fifthtd*$this->getK2($request->fifthtb, $request->fifthtc)/1;
                $results['result_fifth_table'] = $result_fifth_table;
            }

            // Calculator of the sixth table
            if ($request->sixta && $request->sixtb && $request->sixtc && $request->sixtd) {
                $result_six_table = $request->sixta*$this->getK1($request->sixtb)/$this->getK2($request->sixtc, $request->sixtd);
                $results['result_six_table'] = $result_six_table;
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
                "secondtf" => $request->secondtf,
                "thridta" => $request->thridta,
                "thridtb" => $request->thridtb,
                "thridtc" => $request->thridtc,
                "thridtd" => $request->thridtd,
                "thridte" => $request->thridte,
                "thridtf" => $request->thridtf,
                "fourthta" => $request->fourthta,
                "fourthtb" => $request->fourthtb,
                "fourthtc" => $request->fourthtc,
                "fourthtd" => $request->fourthtd,
                "fourthte" => $request->fourthte,
                "fourthtf" => $request->fourthtf,
                "fifthta" => $request->fifthta,
                "fifthtb" => $request->fifthtb,
                "fifthtc" => $request->fifthtc,
                "fifthtd" => $request->fifthtd,
                "sixta" => $request->sixta,
                "sixtb" => $request->sixtb,
                "sixtc" => $request->sixtc,
                "sixtd" => $request->sixtd,
            ]);

            return view('first_calculator', compact('results'));

        } else {

            return view('first_calculator');

        }
    }

    public function reset(Request $request)
    {
        if (session('auth')) {
            $request->session()->regenerate();
            session('auth') == true;
            return redirect()->route('firstcalculator');
        }
    }
}
