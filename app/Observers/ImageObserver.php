<?php

namespace App\Observers;

use App\Models\Image;

class ImageObserver
{

    private function addMedia($image){
        $image->addMedia(public_path('storage/'.$image->url))
                    ->preservingOriginal()
                    ->toMediaCollection();
    }
    /**
     * Handle the Image "created" event.
     */
    public function created(Image $image): void
    {
        $image->registerMediaConversions();
        $this->addMedia($image);
    }

    /**
     * Handle the Image "updated" event.
     */
    public function updated(Image $image): void
    {
        $this->addMedia($image);
    }

    /**
     * Handle the Image "deleted" event.
     */
    public function deleted(Image $image): void
    {
        //
    }

    /**
     * Handle the Image "restored" event.
     */
    public function restored(Image $image): void
    {
        //
    }

    /**
     * Handle the Image "force deleted" event.
     */
    public function forceDeleted(Image $image): void
    {
        //
    }
}
