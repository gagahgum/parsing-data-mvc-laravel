<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getNama(Request $request)
    {
        $first_name = $request['firstname'];
        $last_name = $request['lastname'];
        // dd($request->all());

        return view('welcome', ['first_name' => $first_name, 'last_name' => $last_name]);
    }
}
