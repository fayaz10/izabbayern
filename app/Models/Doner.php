<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
    use HasFactory;
    protected $table = 'Doners';

    protected $fillable =[
        'amount',
        'category',
        'currency',
        'firstName',
        'lastName',
        'userName',
        'email',
        'nameOnCard',
        'cardNumber'
    ];
    public function Posts(){
        return $this->belongsToMany(Posts::class);
    }
}
