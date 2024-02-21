<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TDR extends Model
{
    use HasFactory;

    protected $table = 'tdrs';

    protected $fillable = [
        'title',
        'description',
    ];
}
