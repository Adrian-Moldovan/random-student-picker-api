<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {   
        return [
            'id' => $this -> id,
            'slug' => $this -> slug,
            'duration_minutes' => $this -> duration_minutes,
            'user_id' => $this -> user_id,
            'created_at' => $this -> created_at -> format('Y-m-d H:i:s')
        ];
    }
}
