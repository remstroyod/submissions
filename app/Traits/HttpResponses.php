<?php

namespace App\Traits;

trait HttpResponses
{

    /**
     * Returns a JSON response with success status, data, message, and HTTP code.
     *
     * @param mixed $data The data to be included in the response (optional, default value: "").
     * @param string $message The message to be included in the response (optional, default value: "").
     * @param int $code The HTTP code for the response (optional, default value: 200).
     *
     * @return \Illuminate\Http\JsonResponse The JSON response with success status, data, message, and HTTP code.
     */
    protected function success($data = '', $message = '', $code = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json(['status' => true, "message" => $message, "data" => $data], $code);
    }

    /**
     * Error response method.
     *
     * @param mixed $data Data to be included in the response.
     * @param string $message Error message for the response.
     * @param int $code HTTP status code to be returned.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function error($data = '', $message = '', $code = 301): \Illuminate\Http\JsonResponse
    {
        return response()->json(['status' => false, "message" => $message, "data" => $data], $code);
    }

}
