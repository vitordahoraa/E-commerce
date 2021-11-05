<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class EmptyOrder
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $order;
    /**
     * Evento para identificação de uma ordem vazia
     *
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }
}
