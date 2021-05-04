<?php
namespace App\Services;

use App\Services\ImageLoadService;
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
}
?>