<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'logo', 'partner_category_id'];

    function partnerCategory() : BelongsTo {
        return $this->belongsTo(PartnerCategory::class);
    }

}
