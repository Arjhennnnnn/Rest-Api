<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class skillResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            // 'name' => $this->name,
            'Skill Name' => $this->name,

            // 'slug' => route('skills.show',$this->slug)
            'slug' => $this->slug

        ];
    }
}
