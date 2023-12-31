<?php

namespace App\Http\Resources\Api\Section;

use Illuminate\Http\Resources\Json\JsonResource;

class SectionResource extends JsonResource
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
            'id'            =>$this->id,
            'title'         =>$this->title,
            'user_id'       =>$this->user_id,
            'profile_id'    =>$this->profile_id,
            'sub_section'   =>$this->sections,
            'created_at'    => $this->created_at,
            'updated_at'    => $this->updated_at,
        ];
    }
}
