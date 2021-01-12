<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'name'=> $this->name,
            'email'=> $this->email,
            'mobile'=> $this->mobile,
            'roomtype'=>$this->roomtype->name,
            'guests'=> $this->guests,
            'totalroom'=>$this->totalroom,
            'total'=>$this->total,
            'confirmed'=>$this->confirmed,
            'paid'=>$this->totalroom,
            'checkin'=>$this->checkin,
            'checkout'=>$this->checkout,
        ];
    }
}
