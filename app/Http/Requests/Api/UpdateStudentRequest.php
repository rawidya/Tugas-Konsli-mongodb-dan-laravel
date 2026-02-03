<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
        $studentId = $this->route('student');

        return [
            'absen' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
            'class_id' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:L,P'],
            'birthdate' => ['required', 'date'],
            'address' => ['required', 'string'],
            'nis' => ['required', 'string', 'unique:students,nis,'.$studentId.',_id'],
        ];
    }
}
