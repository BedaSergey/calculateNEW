<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
// use Request

class LoginController extends Controller
{
    public function index()
    {
      return view('login');
    }

    public function login(LoginRequest $request)
    {
      if ($request->password == '123pass') {

        $validated = $request->validated();
        $request->session()->put('auth', true);
        return redirect()->route('calculator');

      } else {
        return redirect()->back();
      }
    }
}
