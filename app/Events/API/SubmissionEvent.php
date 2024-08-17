<?php

namespace App\Events\API;

use App\Models\Submission;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SubmissionEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $submission;

    /**
     * Create a new event instance.
     */
    public function __construct(Submission $submission)
    {
        $this->submission = $submission;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
