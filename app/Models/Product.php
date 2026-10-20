<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'prod_name',
        'price',
    ];

    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }
}