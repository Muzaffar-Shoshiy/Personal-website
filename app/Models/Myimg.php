<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myimg extends Model
{
    use HasFactory;
    protected $table = "myimg";
    protected $primaryKey = "id";
    protected $fillable = ['description', 'image', 'resume'];
}
