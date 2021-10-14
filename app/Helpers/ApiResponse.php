<?php

namespace App\Helpers;
use App\Http\Resources\ApiResponseResource;

use stdClass;

class ApiResponse
{
    static function forbidenResponse($message = 'Insufficient permissions'){
        $response = new stdClass();
        $response -> message = $message;

        return response(new ApiResponseResource($response), 403);
    }


    static function resourceNotAvailableResponse($message = 'Resource not found'){
        $response = new stdClass();
        $response -> message = $message;

        return response(new ApiResponseResource($response), 404);
    }


    static function succesResponse($responseCollection, $message = 'Success'){
        $response = new stdClass();
        $response -> message = $message;
        $response -> data = $responseCollection;

        return response(new ApiResponseResource($response), 200);
    }
    
    
    static function resourceCreatedResponse($responseResource, $message = 'Resource created'){
        $response = new stdClass();
        $response -> message = $message;
        $response -> data = $responseResource;

        return response(new ApiResponseResource($response), 201);
    }
}
