<?php
namespace App\Services;

class ImageLoadService implements ResourceLoadService 
{
    public static function save($image)
    {
        return $path = $image->store('uploads','public');
    }
}
?>
