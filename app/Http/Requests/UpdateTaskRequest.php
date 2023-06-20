<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => ['string', 'nullable'],
            'due_date' => ['date', 'nullable'],
            'description' => ['string', 'nullable'],            
            'user_id' => ['uuid', 'nullable'],
            'work_flow_id' => ['uuid', 'nullable'],
            'project_id' => ['uuid', 'nullable'],
            'priority_id' => ['uuid', 'nullable'],
            'team_id' => ['uuid', 'nullable'],
            'status_id' => ['uuid', 'nullable'],
        ];
    }
}
