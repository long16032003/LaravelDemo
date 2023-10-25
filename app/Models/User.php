<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;
class User extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $fillable = [
        'username',
        'password'
    ];
    // public function category(){
    //     return this->belongsTo(Post::class);
    // }
}
