<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'term',
        'contact_type_id',
        'city_hall_id'
    ];
    public function contactType(): BelongsTo
    {
        return $this->belongsTo(ContactType::class);
    }

    public function cityHall(): BelongsTo
    {
        return $this->belongsTo(CityHall::class);
    }

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
