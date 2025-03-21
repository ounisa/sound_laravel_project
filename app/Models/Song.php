<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    // If your table name is not 'songs', you should specify it here
    // protected $table = 'songs';

    protected $fillable = ['song', 'image', 'file', 'admin']; // Add your fillable fields
}

