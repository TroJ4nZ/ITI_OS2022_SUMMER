<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        // ERROR if using blade.php
        // users.index is shortcut for  users/index, .... etc.

        return view('users.index');
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        return "Store a newly created resource in storage";
    }
    public function show($id)
    {
        // can use if-else here to prevent string entries in id (but regex more smarter/faster when used in web.php routing file)
        return view('users.show')->with(['id' => $id]);
    }

    public function edit($id)
    {

        return view('users.edit')->with(['id' => $id]);
    }
    public function update($id)
    {
        return "Update resource with id $id";
    }
    public function destroy($id)
    {
        return "Remove resource with id $id";
    }
}
