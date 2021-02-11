<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table = 'menus';

    protected $fillable =[
        'fa_title',
        'en_title',
        'pa_title',
        'de_title',
        'urlLink',
        'status'
    ];

    public function submenu(){
        return $this->hasMany(submenu::class)->where('status', 1);
        // return $this->hasMany(submenu::class);
    }
}
