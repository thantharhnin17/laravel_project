<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StorePostRequest;

class HomeController extends Controller
{
    public function testRoot()
    {
        dd("this is the root path");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Post::all();
        $data = Post::orderBy('id','desc')->get();
        
        return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|unique:posts|max:100',
        //     'description' => 'required|max:255',
        // ]);

        // $post = new Post();
        // $post->name = $request->name;
        // $post->description = $request->description;
        // $post->save();

        //from model fillable method
        Post::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //dd($post);
        //$post = Post::findOrFail($id); // 404 for not exit id

        dd($post->categories->name);
        return view('show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //$post = Post::findOrFail($id); // 404 for not exit id
        return view('edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Post $post)
    {
        // $request->validate([
        //     'name' => 'required|unique:posts|max:100',
        //     'description' => 'required|max:255',
        // ]);

        // $post = Post::findOrFail($id);
        // $post->name = $request->name;
        // $post->description = $request->description;

        // $post->save();

        $post->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // $post= Post::findOrFail($id);
        $post->delete();
        return redirect('/posts');
    }
}
