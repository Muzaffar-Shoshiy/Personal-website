<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = "blog";
    protected $primaryKey = "id";
    protected $fillable = ['image', 'header', 'description', 'link'];
}
