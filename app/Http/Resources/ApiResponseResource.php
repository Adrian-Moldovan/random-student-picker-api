<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApiResponseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $resource = [
            'message' => $this -> message
        ];

        if(isset($this -> errors)){
            $resource['errors'] = $this -> errors;
        }

        if(isset($this -> data)){
            $resource['data'] = $this -> data; 
        }

        return $resource;
    }
}
