<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\SubmissionRequest;
use App\Jobs\API\SubmissionJob;
use App\Traits\HttpResponses;

class SubmissionController extends Controller
{

    use HttpResponses;

    public function store(SubmissionRequest $request)
    {

        try {

            SubmissionJob::dispatch($request->only('name', 'email', 'message'));

            return $this->success(message: 'Success!');

        } catch (\Throwable $e) {

            return $this->error(message: $e->getMessage());

        }

    }
}
