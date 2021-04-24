<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['external_id','text','social_network','published_at'];

    public function resources(){
        return $this->hasMany(Resource::class);
    }
}
