<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPreview extends Model
{
    use HasFactory;

    private $fillable = [
        'day',
        'start_at',
        'end_at',
        'description',
        'location',
        'img',
        'active'
    ];
}
