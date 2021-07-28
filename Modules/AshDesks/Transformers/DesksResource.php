<?php

namespace Modules\AshDesks\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class DesksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id'=>$this->id,
          'name'=>$this->name,
          'created_at'=>$this->created_at,
          'lists'=>DeskListResource::collection($this->lists)
        ];
    }
}
