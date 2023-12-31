<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReviewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "teacher_id" => 'required|integer|exists:teachers,id',
            "student_id" => 'required|integer|exists:students,id',
            "comment" => 'nullable|string',
            "qualification" => ['required', Rule::in([1,2,3,4,5])],
        ];
    }
}
