<?php

namespace App\Http\Resources;

class ParameterResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(parent::toArray($request), ['name' => $this->name_en, 'description' => $this->description_en]);
    }
}
