<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
    use HasFactory;

    protected $table = 'submenus';

    protected $fillable =[
        'fa_title',
        'en_title',
        'pa_title',
        'de_title',
        'urlLink',
        'status',
        'menu_id'
    ];

    public function menu(){
        return $this->belongsTo(menu::class,'menu_id');
    }
}
