<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'nip' => $this->nip,
            'address' => $this->address,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'employees_count' => $this->employees->count(),
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];
    }
}
