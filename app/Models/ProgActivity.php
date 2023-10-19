<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'completion_time',
        'due_date',
        'start_at', 
        'end_at'
    ];

    
}
