<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:7',
            'confirmPassword' => 'required|same:password',
        ];
        $this->validate($request, $validate_rule);
        return view('dashboard', ['name' => $request->name]);
    }
}
