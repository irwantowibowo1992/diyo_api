<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class);
    }
}
