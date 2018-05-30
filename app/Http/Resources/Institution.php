<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Institution extends Resource
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
            'type' => 'institutions',
            'id' => $this->id,
            'attributes' => [
                'name' => $this->name,
                'address' => [
                    'street' => $this->street,
                    'city' => $this->city,
                    'state' => $this->state,
                    'zip' => $this->zip,   
                ],
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
            ]
        ];
    }
}
