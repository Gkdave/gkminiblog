<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gates\AdminGate;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('post');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
      $user = $request->user();
      $post = new Post;
      $post->title = $request->title;
      $post->body = $request->body;
      $user->post()->save($post);
      return redirect(route("post_index"))->with('status','Post Added ');
     
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      //  $this->authorize('isAdmin',Post::class);
      if(Auth::user()->cannot('isAdmin',Post::class)){
        abort(403,'YOu do not Authorized  this Post');
      }
       $post= Post::find($id);
       return view('editpost',['post'=>$post]);
    }
    //denies or allows

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
     
      $post = Post::find($id);
      $post->title = $request->title;
      $post->body = $request->body;
      $post->save();
      return redirect(route("dashboard"))->with('status','Post Updated ');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      Post::destroy($id);
      if(Gate::denies('isAdmin',$post)){
        abort(403,'YOu are not Authorised');
      }
      return redirect(route('dashboard'))->with('status',"post Deleted");
    }
}
