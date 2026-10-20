<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'publisher_id',
        'title',
        'slug',
        'isbn',
        'price',
        'description',
        'image',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class,
            'book_genre'
        );
    }

    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
}