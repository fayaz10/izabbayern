<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function tags()
    {
        return $this->BelongsToMany(Tags::class);
    }

    public function getRouteKeyName()
    {
        return 'title';
    }
    public function Doner(){
        return $this->BelongsToMany(Doner::class);
    }

    public function getImageFiles(){
        
    }
}
