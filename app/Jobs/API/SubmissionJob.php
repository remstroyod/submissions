<?php

namespace App\Jobs\API;

use App\Events\API\SubmissionEvent;
use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

class SubmissionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected object $data;

    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        $this->data = (object) $data;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $submission = Submission::create([
            'name'      => $this->data->name,
            'email'     => $this->data->email,
            'message'   => $this->data->message,
        ]);

        event(new SubmissionEvent($submission));

    }

    public function failed(Throwable $exception)
    {
        Log::error($exception->getMessage());
    }

}
