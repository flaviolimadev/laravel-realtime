<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class AtivosUpdate implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $ativos;

    /**
     * Create a new event instance.
     */
    public function __construct($ativos)
    {
        //
        $this->ativos = $ativos;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        //return new PrivateChannel('cApp.Models.User.'auth()->user()->id);
        return new Channel('ativos');
    }

    public function broadcastAs()
    {
        return 'AtivosUpdate';
    }

    public function broadcastWith()
    {
        return [
            'ativos' => $this->ativos, 
            'ativosRender' => view('_broadsUpdates.ativosSite', ['ativos' => $this->ativos])->render(), 
        ];
    }
}
