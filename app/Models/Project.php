<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'content','slug','cover_image'];


    public static function generateSlug($title){
        return Str::slug($title, '-');
    }
}
