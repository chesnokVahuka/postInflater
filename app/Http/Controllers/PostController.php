<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Resource;
use App\Services\ImageLoadService;
use App\Services\ImageDeleteService;
use App\Services\PostService;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $postService;

    public function __construct(PostService $service)
    {
        $this->postService = $service;
    }
 

    public function index()
    {   
        return view('posts.index',['posts'=>$this->postService->allPosts()]);
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

            $path = ImageLoadService::save($request->file('image'));
            $resource = $this->postService->savePostResource($post, $path);               
        }
       
        return back()->with('success','Success! Post uploaded.');
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
    public function destroy(Post $post)
    {
        $this->postService->destroy($post);
        //$post = Post::find($id);
        //$resource = Resource::where('post_id',$post['id'])->first();
        //$resource->delete();
        //$post->delete();
        return back()->with('success','Success! Post deleted.');
    }
}
