<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

     // shows how our data is to be displayed i.e array format.
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'fname'=>$this->fname,
            'lname'=>$this->lname,
            'course'=>$this->course,
            'year'=>$this->year,
        ];
    }
}
