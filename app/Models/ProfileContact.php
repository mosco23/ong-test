<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProfileContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact',
    ];

    public function profile(): BelongsTo {
        return $this->belongsTo(Profile::class);
    }
}
