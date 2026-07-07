<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function resgister()
    {
        return view('form.register');
    }
    public function welcome(Request $request)
    {
        return view('form.welcome', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);
    }
}
