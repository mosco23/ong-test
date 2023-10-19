<?php

namespace App\Observers;

use App\Mail\NewsletterMailable;
use App\Models\Newsletter;
use Illuminate\Support\Facades\Mail;

class NewsletterObserver
{
    /**
     * Handle the Newsletter "created" event.
     */
    public function created(Newsletter $newsletter): void
    {
        Mail::to($newsletter->email)->send(new NewsletterMailable($newsletter));
    }

    /**
     * Handle the Newsletter "updated" event.
     */
    public function updated(Newsletter $newsletter): void
    {
        //
    }

    /**
     * Handle the Newsletter "deleted" event.
     */
    public function deleted(Newsletter $newsletter): void
    {
        //
    }

    /**
     * Handle the Newsletter "restored" event.
     */
    public function restored(Newsletter $newsletter): void
    {
        //
    }

    /**
     * Handle the Newsletter "force deleted" event.
     */
    public function forceDeleted(Newsletter $newsletter): void
    {
        //
    }
}
