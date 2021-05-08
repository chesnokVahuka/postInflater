<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageDeleteService 
{
    public static function delete($path)
    {
        Storage::delete($path);
    }
}
?>