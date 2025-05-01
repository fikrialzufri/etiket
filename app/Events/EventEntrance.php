<?php

namespace App\Events;

use App\Models\Entrance;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventEntrance
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $entrance;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Entrance $entrance)
    {
        $this->entrance = $entrance;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('EntranceEvent');
    }

    public function broadcastAs()
    {
        return 'EntranceShow';
    }

    public function broadcastWith()
    {
        return [
            'entrance' => $this->entrance
        ];
    }
}
