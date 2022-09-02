<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        // ERROR if using blade.php
        // users.index is shortcut for  users/index, .... etc.
        // $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')), true);

        $users = User::paginate(15);
        $posts = Post::all();
        return view('users.index')->with(['users' => $users, 'posts' => $posts]);
    }
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        Post::create(
            [
                'name' => $request->title,
                'email' => $request->body,
                'password' => $request->password
            ]
            );
            // $posts = Post::paginate(15);
            // return view('posts.index')->with(['posts' => $posts, 'added' => true]);
            return redirect()->route('users.index')->with(['success' => "User Created Succesfully"]);
    }
    public function show($id)
    {
        // can use if-else here to prevent string entries in id (but regex more smarter/faster when used in web.php routing file)
        // $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')), true);
        // $key_user = null;
        // get the exact user to be shown
        // foreach ($users as $user) {
        //     if ($user['id'] == $id) {
        //         $key_user = $user;
        //         break;
        //     }
        // }
        return view('users.show')->with(['user' => User::find($id)]);
    }

    public function edit($id)
    {
        // It's better to just send id (Query string) rather than sending the whole object (impossible) as you will also
        // check if the user sent a wrong id (injection)  through the query string and the user is actually
        // not in the database/json!

        // here we accept the id from the view (button: Edit) and get the exact user then print it in the edit view.
        $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')), true);
        $key_user = null;
        // get the exact user to be shown
        foreach ($users as $user) {
            if ($user['id'] == $id) {
                $key_user = $user;
                break;
            }
        }

            return view('users.edit')->with(['user' => $key_user]);
    }
    public function update($id, Request $request)
    {
        // return dd($request->input("name"));
        return "Update resource with id $id with <br>" . $request->input("name") . "<br>" . $request->input("email");
    }
    public function destroy($id)
    {
        return "Remove resource with id $id";
    }

}
