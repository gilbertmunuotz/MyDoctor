<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class doctors extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'number',
        'faculty',
        'user_id',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Appointment::class,);
    }
}
