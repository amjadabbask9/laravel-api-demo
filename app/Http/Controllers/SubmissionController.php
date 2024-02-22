<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitRequest;
use App\Jobs\ProcessSubmission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function submit(SubmitRequest $request)
    {
        try {
            // Dispatch job to process submission
            ProcessSubmission::dispatch($request->validated());
        } catch (\Exception $e) {
            // Handle job dispatch error
            return response()->json(['error' => 'Failed to process submission.'], 500);
        }

        return response()->json(['message' => 'Submission received.']);
    }
}
