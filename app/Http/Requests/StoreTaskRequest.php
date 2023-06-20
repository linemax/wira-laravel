<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'name' => ['string', 'required'],
            'due_date' => ['date', 'required'],
            'description' => ['string', 'required'],            
            'user_id' => ['uuid', 'required'],
            'work_flow_id' => ['uuid', 'required'],
            'project_id' => ['uuid', 'required'],
            'priority_id' => ['uuid', 'required'],
            'team_id' => ['uuid', 'required'],
            'status_id' => ['uuid', 'required'],
        ];
    }
}
