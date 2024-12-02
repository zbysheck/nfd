<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'company' => new CompanyResource($this->whenLoaded('company')),
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];
    }
}
