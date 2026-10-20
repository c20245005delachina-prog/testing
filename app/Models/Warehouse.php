<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'location',
    ];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function managers(): HasMany
    {
        return $this->hasMany(Manager::class);
    }
}