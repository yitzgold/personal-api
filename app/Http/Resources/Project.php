<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Project extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'projects',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'summary' => $this->summary,
                'url' => $this->url
            ]
        ];
    }
}
