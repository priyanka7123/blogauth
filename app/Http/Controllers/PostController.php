<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['post'] = post::all();
        return view('work.home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        return view('work.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
        ]);
        post::create([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ]);
        $request->session()->flash('msg', "<div class='alert alert-success '>data inserted successfully</div>");
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('work.edit', ['record' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
        ]);
        post::find($post->id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ]);
        $request->session()->flash('msg', "<div class='alert alert-success '>data updated successfully</div>");
        return redirect()->route('post.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Request $request)
    {
        $post->delete();
        $request->session()->flash('msg', " <div class='alert alert-danger '>data deleted successfully</div>");
        return redirect()->route('post.index');
    }
}
