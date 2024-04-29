<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Resources\Json\JsonResource;

class TasksStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'project_id' => 'required',
            'status_id' => 'required',
            'type_id' => 'required',
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'project_id.required' => 'Не заполнен проект',
            'status_id.required' => 'Не заполнен статус',
            'type_id.required' => 'Не заполнен тип',
            'title.required' => 'Не заполнено название',
            'description.required' => 'Не заполнено описание',
            
        ];
    }
}
