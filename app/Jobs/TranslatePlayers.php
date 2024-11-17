<?php

namespace App\Jobs;

use App\Models\Players;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TranslatePlayers implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Players $player)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('You just creat a new player name: ' . $this->player->name);
    }
}
