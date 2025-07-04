<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    //
    protected $fillable = ['name', 'slug'];

    /**
     * The posts that belong to the category
     */
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'category_post');
    }
}
