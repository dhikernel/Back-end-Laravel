<?php

namespace App\Http\Resources;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'identify' => $this->uuid,
            'full_name' => $this->name,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'date' => Carbon::make($this->date_of_birth)->format('d-m-Y'),
            'zip' => $this->zip_code,
            'address' => $this->address,
            'number' => $this->number,
            'city' => $this->city,
            'state' => $this->state
        ];
    }
}
