<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'publisher_name',
    ];

    public function authors(): HasMany
    {
        return $this->hasMany(Author::class);
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }

    // Scope
    public function scopeSearchData(
        Builder $query,
        ?string $search
    ): Builder {
        return $query->when(
            filled($search),
            fn (Builder $query) => $query->where(
                'publisher_name','like', "%{$search}%"
            )
        );
    }

    public function scopeLatestFirst(Builder $query): Builder
    {
        return $query->orderBy('created_at', 'desc');
    }
}
