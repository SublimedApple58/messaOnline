<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic',
        'title',
        'category',
        'content',
        'img',
        'category_id'
    ];

    public function user(){
        return $this ->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function countries(){
        return $this->belongsToMany(Country::class);
    }
}
