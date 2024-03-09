<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quail extends Model
{
    use HasFactory;

    protected $table = 'quail';

    protected $fillable = [
        'title',
        'content',
    ];
}
