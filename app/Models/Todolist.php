<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Todolist extends Model
{
    use HasFactory;
    protected $table = 'todolists';
    protected $fillable = [
        'text',
        'complete'
    ];
}
