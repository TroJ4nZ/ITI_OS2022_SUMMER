<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(15);
        return view('posts.index')->with(['posts' => $posts]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create');
    }

    /**
     * // Handle storing newly created post
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // $id = Auth::id();
        // $user = User::find($id);
        $user = Auth::user();
        $user->posts()->create($request->only('title', 'body'));
        // Post::create( $request->validated());
        // $posts = Post::paginate(15);
        // return view('posts.index')->with(['posts' => $posts, 'added' => true]);
        return redirect()->route('posts.index')->with(['success' => "Post Created Succesfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
        // $post = Post::find($id);
        // // Prevent user from showing a deleted post
        // if (!isset($post['deleted_at'])) {
        //     $posts = Post::paginate(15);
        //     return view('posts.index')->with(['posts' => $posts, 'error' => true]);

        // }
        return view('posts.show')->with(['post' => Post::find($id)]); // implicit binding (routing)
        // **** lazy loading + eager loading for relations in listing posts (better performance)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {


        return view('posts.edit')->with(['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::find($id);
        if ($post->user == Auth::user()) {
            $post->update(
                [
                    'title' => $request->input('title'),
                    'body' => $request->input('body'),
                ]
            );
            return redirect()->route('posts.index')->with(['success' => "Post Updated Succesfully"]);
        }
        // $posts = Post::paginate(15);
        // return view('posts.index')->with(['posts' => $posts, 'updated' => true]);
        else {
            return redirect()->route('posts.index')->with(['error' => "Error! This post does not belong to this user."]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        // $posts = Post::paginate(15);
        // return redirect(route('posts.index'))->with(['posts' => $posts, 'deleted' => true]);
        return redirect()->route('posts.index')->with(['success' => "Post Deleted Succesfully"]);
    }

    public function softs()
    {
        $posts = Post::onlyTrashed()->paginate(15);

        return view('posts.softs')->with(['posts' => $posts]);
    }

    public function restore($id)
    {
        Post::onlyTrashed()->where('id', $id)->restore();
        //     $posts = Post::paginate(15);
        //     return view('posts.index')->with(['posts' => $posts, 'restored' => true]);
        return redirect()->route('posts.index')->with(['success' => "Post Restored Succesfully"]);
    }
}
