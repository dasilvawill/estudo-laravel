<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['William', 'Matheus', 'Guilherme'];

        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view("user.create");
    }

    public function post(Request $request)
    {
        var_dump($request->only(['email', 'name']));
    }

    public function show($id)
    {
        return view('user.show', compact('id'));
    }
}
