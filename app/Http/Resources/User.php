<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'id'=> $this->id,
            'email'=> $this->email,
            'firstName'=> $this->firstName,
            'lastName'=> $this->lastName,
            'city'=> $this->city,
            'state'=> $this->state,
            'zip'=> $this->zip,
            'phone'=> $this->phone,
            'isAdmin'=> $this->isAdmin,
            'country'=> $this->country,
            'address'=> $this->address,
            'address2'=> $this->address2,
        
        ];
        //return parent::toArray($request);
    }
}
