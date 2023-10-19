<?php

namespace App\Models;

use App\Traits\DateFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Activity extends Model
{
    use HasFactory, DateFormatter;

    protected $fillable = [
        'date',
        'start_at',
        'end_at',
        'name',
    ];

    protected $casts = [
        // 'start_at' => 'datetime:H:i',
        // 'end_at' => 'datetime:H:i',
    ];

    public function images(): BelongsToMany {
        return $this->belongsToMany(Image::class);
    }

}
