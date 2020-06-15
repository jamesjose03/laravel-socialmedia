<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function getDashboard() {
        $posts = Post::all();
        return view('dashboard', ['posts'=> $posts]);
    }
    public function postCreatePost(Request $request) {
        $validator = Validator::make($request->all(), [
            'body' => 'required|max:1000',
        ]);
        
        $message = 'There was an error. Please try again.';
        if ($validator->fails()) {
            return redirect()->route('dashboard')->withErrors($validator);
        }
        $post = new Post();
        $post->body = $request['body'];
        if($request->user()->posts()->save($post)){
            $message = 'Post created successfully.';
        }    
        return redirect()->route('dashboard')->with(['message' => $message]);
    }

}