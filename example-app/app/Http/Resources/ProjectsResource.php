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
    public function toArray(Request $request): array
    {
        //выбираем данные, которые должны возвращаться
        return [
            'id' => $this ->id,
            'project_name' => $this ->project_name,
            

        ];
    }
}
