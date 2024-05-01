<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

     
        //выбираем данные, которые должны возвращаться (cморя откуда запрос, потому что в апи проджекст не нужен список с задачами)
    public function toArray(Request $request): array
    {
        if ($request->is('api/tasks/*')) {
            return [
                'id' => $this->id,
                'project_name' => $this->project_name,
                'lists' => $this->lists,
            ];
        } else {
            return [
                'id' => $this->id,
                'project_name' => $this->project_name,
            ];
        }


       
    }
}
