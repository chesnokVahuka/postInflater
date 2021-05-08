<?php
namespace App\Services;

use App\Services\ImageLoadService;
use App\Services\ImageDeleteService;
use App\Models\Resource;
use App\Models\Post;

class PostService {
    public function savePostResource(Post $post, String $path)
    {
        $resource = Resource::create([
            'post_id' => $post->id,
            'type' => 'photo',
            'path' => $path,
            'social_network' => $post->social_network
        ]);

        return $resource;
    }

    public function allPosts()
    {
        return $posts = Post::all();

    }

    public function destroy(Post $post)
    {
        $resource = Resource::select('path')->where('post_id',$post['id'])->first();
        ImageDeleteService::delete('public/'.$resource->path);
        $post->delete();
    }
}
?>