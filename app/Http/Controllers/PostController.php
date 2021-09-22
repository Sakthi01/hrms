<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
        $post = Post::all();
        return response()->json($post);
    }
    
    public function store(Request $request)
    {
        $obj = new Post();
        $obj->fill($request->all());
        $result = $obj->save();
        return response()->json($result);
    }

    
}
