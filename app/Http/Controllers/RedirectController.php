<?php

namespace App\Http\Controllers;

use Auth;

class RedirectController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            if (auth()->user()->submit === '1') {
                return redirect('mobile-status');
            } else {
                return redirect('home');
            }
        } else {
            return view('auth.login');
        }
    }

    public function home()
    {
        if (is_null(auth()->user()->scheme_code)) {
            return view('landing');
        } else {
            return redirect('mobile');
        }
    }
}
