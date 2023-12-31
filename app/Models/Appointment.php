<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'doctor',
        'date',
        'message',
        'status',
        'user_id',
    ];
    public function doctors(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }
}
