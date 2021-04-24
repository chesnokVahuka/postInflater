<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Resource;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index',['posts'=>$posts]);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'external_id' => 'numeric|unique:posts',
            'text' => 'nullable|string',
            'social_network' => 'required|string|max:30',
            'published_at' => 'date',            
        ]);
        
        $post = Post::create($validated);

        if($request->has('image'))
        {
            $request->validate([
                'image' => 'image|mimes:jpeg,jpg,png,gif'
            ]);

            $path = $request->file('image')->store('uploads','public');
            
            Resource::create([
                'post_id' => $post->id,
                'type' => 'photo',
                'path' => $path,
                'social_network' => $post->social_network
            ]);               
        }
       
        return back()->with('success','Success! Post uploaded.');
        //return response()->json(['error'=> false, 'data'=>$post]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
