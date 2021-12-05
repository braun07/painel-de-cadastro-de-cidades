<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CityHall extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'population',
        'city_id',
    ];
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
