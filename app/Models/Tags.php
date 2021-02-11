<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 $lang = session()->get('locale');
class Tags extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany(Posts::class);
    }

    public function getRouteKeyName()
    {
        return 'en_name';
    }
}
