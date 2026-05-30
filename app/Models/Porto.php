<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Porto extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'category', 'image', 'link'];
}
