<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'rating',
        'user_id',
        'resto_id',
    ];

    /**
     * Get the user that owns the Review
     *
     * @return \Illuminate\Database\El    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
