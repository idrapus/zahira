<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDetail extends Model
{
    protected $fillable = [
        'user_id',
        'nik',
        'phone_number',
        'address',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'occupation',
    ];

    /**
     * Get the user that owns the detail.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
