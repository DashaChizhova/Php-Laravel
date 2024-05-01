<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TasksResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
         //выбираем данные, которые должны возвращаться
      
        return [
            
            'id' => $this ->id,
            'project_id' => $this ->project_id,
            'status_id' => $this -> status_id,
            'type_id' => $this -> type_id,
            'title' => $this -> title,
            'description' => $this -> description,
            // 'lists'=>$this ->lists,

        ];
    
    }
}
