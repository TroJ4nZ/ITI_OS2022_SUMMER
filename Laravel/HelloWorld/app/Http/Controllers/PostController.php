<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
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

        Post::create(
            [
                'title' => $request->title,
                'body' => $request->body
            ]
            );
            $posts = Post::paginate(15);
            return view('posts.index')->with(['posts' => $posts, 'added' => true]);
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
        return view('posts.show')->with(['post' => Post::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with(['id' => $id, 'post' => $post]);
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
        Post::where('id', $id)->update(
            [
                'title' => $request->input('title'),
                'body' => $request->input('body'),
            ]);
            $posts = Post::paginate(15);
            return view('posts.index')->with(['posts' => $posts, 'updated' => true]);
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
        $posts = Post::paginate(15);
        return view('posts.index')->with(['posts' => $posts, 'deleted' => true]);
    }

    public function softs()
    {
        $posts = Post::withTrashed()->get();

        return view('posts.softs')->with(['posts' => $posts]);
    }

    public function restore($id)
    {
        Post::withTrashed()->where('id', $id)->restore();
        $posts = Post::paginate(15);
        return view('posts.index')->with(['posts' => $posts, 'restored' => true]);
    }

}
