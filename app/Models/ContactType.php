<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class ContactType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
