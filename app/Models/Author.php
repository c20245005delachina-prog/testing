<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'publisher_id',
        'name',
    ];

    public function publisher(): BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }

    public function profile(): HasOne
    {
        return $this->hasOne(AuthorProfile::class);
    }
}