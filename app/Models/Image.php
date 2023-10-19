<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Image extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'url'
    ];

    function activities(): BelongsToMany {
        return $this->belongsToMany(Activity::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('sm')
            ->width(368)
            ->height(232);

        $this->addMediaConversion('md')
            ->width(1280)
            ->height(720)
            ->sharpen(10);
    }

    public function getImageResized(string $tag = ''){
        $media = $this->getMedia()->last();
 
        return $media->getUrl($tag);
    }


    public function getUrls(Collection $images, string $tag) {
        $urls = $images->map(function($img) use ($tag){
            return $img->getImageResized($tag);
        });

        return $urls;
    }
}
