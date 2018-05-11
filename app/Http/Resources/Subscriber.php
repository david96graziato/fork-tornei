<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Subscriber extends Resource
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
            'id' => $this->id,
            'name' => $this->name,
            'surname' => $this->surname,
            'birthday' => $this->birthday,
            'email' => $this->email,
            'phone' => $this->phone,
            'fit' => $this->fit,
            'club' => $this->club,
            'score_id' => $this->score_id,
            'category_id' => $this->category_id,
            'type_id' => $this->type_id,
            'note' => $this->note,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
