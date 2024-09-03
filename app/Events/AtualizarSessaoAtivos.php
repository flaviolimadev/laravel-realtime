<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AtualizarSessaoAtivos implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $session;

    /**
     * Create a new event instance.
     */
    public function __construct($session)
    {
        //
        $this->session = $session;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new PrivateChannel('App.Models.User'.auth()->user()->id);
        //return new Channel('ativos');
    }

    public function broadcastAs()
    {
        return 'AtualizarSessaoAtivos';
    }

    public function broadcastWith()
    {
        return [
            'Testando' => 123,
        ];
    }

}
