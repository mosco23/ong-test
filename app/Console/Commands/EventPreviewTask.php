<?php

namespace App\Console\Commands;

use App\Models\EventPreview;
use Illuminate\Console\Command;

class EventPreviewTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task:event-preview';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gestion des events prevus a afficher dans le header du site web';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to control event preview active');
        EventPreview::where('active', true)
                    ->Where('stop_at', '<=', now())
                    ->update(['active' => false]);
        $this->info('Event preview control succed');
    }
}
