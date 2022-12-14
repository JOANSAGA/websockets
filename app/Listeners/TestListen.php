<?php

namespace App\Listeners;

use App\Events\TestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TestListen implements ShouldQueue
{
    public $delay = 1;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param \App\Events\TestEvent $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
        //
    }
}
