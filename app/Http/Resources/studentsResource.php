<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class studentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->_id,
            'absen' => $this->absen,
            'name' => $this->name,
            'class_id' => $this->class_id,
            'gender' => $this->gender,
            'birtdate' => $this->birtdate,
            'addres' => $this->addres,
            'nis' => $this->nis,
        ];
    }
}
