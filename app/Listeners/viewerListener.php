<?php

namespace App\Listeners;

use App\Events\viewerEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class viewerListener
{
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
     * @param  object  $event
     * @return void
     */
    public function handle(viewerEvent $event)
    {
        if(!session()->has('idVideo'.$event->video->id))
        {

            $this->video( $event->video);
        }
        else
        {
            return false;
        }
    }

    function video($video)
    {
        $video->views = $video->views + 1;

        $video->save();

        session()->put('idVideo'.$video->id,$video->id);
    }
}
