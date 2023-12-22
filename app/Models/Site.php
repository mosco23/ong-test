<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'first_name',
        'last_name',
        'description',
        'link',
        'address',
        'place',
        'email',
    ];

    function siteContacts(): HasMany {
        return $this->hasMany(SiteContact::class);
    }

    function socialNetworks(): HasMany {
        return $this->hasMany(SocialNetwork::class);
    }
}
