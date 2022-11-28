<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'page_id'];

    public function parent()
    {
        return $this->hasMany(Page::class, 'id', 'page_id');
    }
}
