<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'slug',
        'summary',
        'content',
        'photo',
        'like',
        'view',
        'comment',
        'status',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
