<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class doctors extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'number',
        'faculty',
        'user_id',
    ];

    public function patient(): HasMany
    {
        return $this->hasMany(Appointment::class,);
    }
}
