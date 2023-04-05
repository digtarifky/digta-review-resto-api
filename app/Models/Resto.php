<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resto extends Model
{
    use HasFactory;



    protected $fillable = [
        'name',
        'description',
        'address',
        'image',
    ];

    /**
     * Get all of the reviews for the Resto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
