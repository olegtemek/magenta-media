<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subtitle', 'image', 'custom_title', 'custom_description', 'custom_image', 'seo_title', 'seo_description'];
}
