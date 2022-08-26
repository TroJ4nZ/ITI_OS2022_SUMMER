<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        // ERROR

        return view('index');
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        return "Store a newly created resource in storage";
    }
    public function show($id)
    {
        return view('show')->with(['id' => $id]);
    }

    public function edit($id)
    {

        return view('edit')->with(['id' => $id]);
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
