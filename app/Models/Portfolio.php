<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = "portfolio";
    protected $primaryKey = "id";
    protected $fillable = ['project_image', 'project_link', 'project_name'];
}
