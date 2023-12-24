<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class pushing_event implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    protected $user;
    protected $message;
    /**
     * Create a new event instance.
     */
    public function __construct($user)
    {
        return $this->user = $user;
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('pushing_channel'),
        ];
    }
    public function broadcastWith(): array
    {
        return [
            'message'=> $this->message,
        ];
    }
}
