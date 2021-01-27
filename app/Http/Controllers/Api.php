<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Api extends Controller
{
    //

    public function post_list()
    {
        return Post::all();
    }

    public function create_post(Request $request)
    {
        post::create([
            'title' => $request->title,
            'author' => $request->author,
            'body' => $request->body,
            'user_id' => $request->user_id,
        ]);

        return ['result' => "data inserted successfully"];
    }

    public function delete(Request $req, $id)
    {
        Post::find($id)->delete();

        return ['result' => "data deleted successfully"];
    }
}
