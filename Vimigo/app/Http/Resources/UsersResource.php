<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            'id' => (string)$this->id,
                'type' => 'Users',
                'attributes' => [
                    'name' => $this->name,
                    'email' => $this->email,
                    'email_verified_at' => $this->email_verified_at,
                    'remember_token' => $this->remember_token,
                    'created_at' => $this->created_at,
                    'updated_at' => $this->updated_at,
                ]
        ];
    }
}
