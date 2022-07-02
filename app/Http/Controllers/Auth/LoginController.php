<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
// Use if you need
// use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        // Set your password here
        if ($request->password == '123pass') {

            $validated = $request->validated();
            $request->session()->put('auth', true);
            return redirect()->route('firstcalculator');

        } else {

            $request->session()->flash('status', 'Неверный пароль!');
            return redirect()->back();

        }
    }
}
