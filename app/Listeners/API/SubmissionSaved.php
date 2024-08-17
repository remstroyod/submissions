<?php

namespace App\Listeners\API;

use App\Events\API\SubmissionEvent;
use App\Mail\SubmissionCreatedAdminMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SubmissionSaved
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubmissionEvent $event): void
    {
        try {

            Mail::to(config('mail.from.address'))->send(new SubmissionCreatedAdminMail($event->submission));

        } catch (\Throwable $e) {

           Log::error($e->getMessage());

        }

    }
}
