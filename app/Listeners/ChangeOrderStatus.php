<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ChangeOrderStatus
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
     * Caso não haja itens naquela ordem, encerra ela
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if($event->order->orderitens->count() == 0){
            $data = ['status' => 'Encerrado'];
            $event->order->update($data);
        }
    }
}
